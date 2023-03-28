<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Bioskop;
use Illuminate\Http\Request;
use App\Http\Resources\FilmResource;
use App\Http\Resources\BioskopResource;
use App\Http\Resources\FilmDetailResource;

class FilmController extends Controller
{
    public function index(){
        $theater = Film::all();

        // return response()->json($theater);
        return FilmResource::collection($theater);
    }

    public function detail($id){
        $usersDetail = Film::findOrFail($id);
        return new FilmDetailResource($usersDetail);
    }
}
