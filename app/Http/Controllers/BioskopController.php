<?php

namespace App\Http\Controllers;

use App\Models\Bioskop;
use Illuminate\Http\Request;
use App\Http\Resources\BioskopResource;
use App\Http\Resources\BioskopDetailResource;

class BioskopController extends Controller
{
    public function index(){
        $theater = Bioskop::all();

        // return response()->json($theater);
        return BioskopResource::collection($theater);
    }

    public function detail($id){
        $usersDetail = Bioskop::findOrFail($id);
        return new BioskopDetailResource($usersDetail);
    }
}
