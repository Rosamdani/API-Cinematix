<?php

namespace App\Http\Controllers;

use App\Http\Resources\ShowingResource;
use App\Models\Showing;
use Illuminate\Http\Request;

class ShowingController extends Controller
{
    public function index(){
        $tayang = Showing::all();

        // return response()->json($tayang);
        return ShowingResource::collection($tayang);
    }
}
