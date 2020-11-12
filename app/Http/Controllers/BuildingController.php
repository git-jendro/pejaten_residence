<?php

namespace App\Http\Controllers;

use App\Building;
use App\Facility;
use App\FacilityRules;
use App\Project;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $building = Building::all();
        $facility = FacilityRules::all();

        return view('/building/index', compact('building', 'facility'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::all();
        $facility = Facility::all();

        return view('/building/create', compact('project', 'facility'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $building = new Building;
        $building->id_project   = $request->id_project;
        $building->nama         = $request->nama;
        $building->lantai       = $request->lantai;
        $building->luas         = $request->luas;
        $building->deskripsi    = $request->deskripsi;
        $building->save();
        

        $loop = $request->get('id_facility');
        foreach ($loop as $key) {
            $amenity = new FacilityRules;
            $amenity->id_building = $building->id_building;
            $amenity->id_facility = $key;
            $amenity->save();
        };

        return redirect()->action('BuildingController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::where('id_building', $id)->first();
        $project = Project::all();

        return view('/building/edit', compact('building', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Building::where('id_building', $id)
            ->update([
                'id_project'    => $request->id_project,
                'nama'          => $request->nama,
                'lantai'        => $request->lantai,
                'luas'          => $request->luas,
                'deskripsi'     => $request->deskripsi
            ]);

        return redirect()->action('BuildingController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Building::destroy($id);

        return redirect()->action('BuildingController@index');
    }
}
