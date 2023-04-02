<?php

namespace App\Http\Controllers;

use App\Http\Resources\TayangResource;
use App\Models\Tayang;
use Illuminate\Http\Request;

class TayangController extends Controller
{
    public function index(){
        $tayang = Tayang::all();

        // return response()->json($tayang);
        return TayangResource::collection($tayang);
    }
}
