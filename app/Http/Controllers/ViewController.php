<?php

namespace App\Http\Controllers;

use App\AmenityRules;
use App\Facility;
use App\FacilityRules;
use App\Unit;
use App\UnitImage;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Unit::all();
        $amenity = AmenityRules::all();
        $image = UnitImage::all();

        return view('/view/index', compact('unit', 'amenity', 'image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = Unit::where('id_unit',$id)->first();
        $amenity = AmenityRules::all();
        $image = UnitImage::all();
        $facility = Facility::all();
        $facrule = FacilityRules::all();
        $disc = $unit->diskon / 100;
        $harga = $unit->harga_jual * $disc;

        return view('/view/show', compact('unit', 'amenity', 'image', 'facility', 'facrule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tri($id)
    {
        
    }
}
