<?php

namespace App\Http\Controllers;

use App\AmenityRules;
use App\FacilityRules;
use App\Room;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $room = Room::all();
        $facility = FacilityRules::all();
        $amenity = AmenityRules::all();

        return view('/user/index', compact('room', 'facility', 'amenity'));
    }

    public function show($id)
    {
        $room = Room::where('id', $id)->first();
        $facility = FacilityRules::all();
        $amenity = AmenityRules::all();

        return view('/user/show', compact('room', 'facility', 'amenity'));
    }
}
