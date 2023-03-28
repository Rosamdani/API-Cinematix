<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserDetailResource;

class UserController extends Controller
{
    public function index(){
        $user = User::all();

        // return response()->json($user);
        return UserResource::collection($user);
    }

    public function detail($id){
        $usersDetail = User::findOrFail($id);
        return new UserDetailResource($usersDetail);
    }
}
