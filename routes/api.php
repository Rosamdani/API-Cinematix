<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BioskopController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowingController;
use App\Http\Controllers\TayangController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'detail']);

Route::get('/theater', [BioskopController::class, 'index']);
Route::get('/theater/{id}', [BioskopController::class, 'detail']);


Route::get('/get-film', [FilmController::class, 'index']);
Route::get('/get-film/{id}', [FilmController::class, 'detail']);


Route::get('/show-detail', [ShowingController::class, 'index']);


Route::get('/get-location', [LocationController::class, 'index']);
Route::get('/tayang', [TayangController::class, 'index']);


Route::get('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);
Route::get('/me', [AuthenticationController::class, 'me']);
