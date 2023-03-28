<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationResource;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $lokasi = Location::all();

        // return response()->json($lokasi);
        return LocationResource::collection($lokasi);
    }
}
