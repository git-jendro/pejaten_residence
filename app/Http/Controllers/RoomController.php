<?php

namespace App\Http\Controllers;

use App\Amenity;
use App\AmenityRules;
use App\Facility;
use App\FacilityRules;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Room::all();
        $facility = FacilityRules::all();
        $amenity = AmenityRules::all();

        return view('/kamar/index', compact('room', 'facility', 'amenity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $amenity = Amenity::all();
        $fasilitas = Facility::all();

        return view('/kamar/create', compact('amenity', 'fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room;
        $room->nama         = $request->nama;
        $room->deskripsi    = $request->deskripsi;
        $room->harga_beli   = $request->harga_beli;
        $room->harga_sewa   = $request->harga_sewa;
        $room->foto         = Storage::put('Room', $request->foto);
        $room->save();

        $loop1 = $request->get('id_facility');
        foreach ($loop1 as $key) {
            $facility = new FacilityRules;
            $facility->id_rooms = $room->id;
            $facility->id_facility = $key;
            $facility->save();
        };

        $loop2 = $request->get('id_amenity');
        foreach ($loop2 as $key) {
            $amenity = new AmenityRules;
            $amenity->id_rooms = $room->id;
            $amenity->id_amenity = $key;
            $amenity->save();
        };

        return redirect()->action('RoomController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::where('id_rooms', $id)->first();
        $facility = FacilityRules::all();
        $amenity = AmenityRules::all();

        return view('/kamar/show', compact('room', 'facility', 'amenity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::where('id', $id)->first();
        $facility = FacilityRules::all();
        $amenity = AmenityRules::all();

        return view('/user/show', compact('room', 'facility', 'amenity'));
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
        Room::destroy($id);

        return redirect()->action('RoomController@index');
    }
}
