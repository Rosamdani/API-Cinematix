<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BioskopController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', [UserController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/user/{id}', [UserController::class, 'detail'])->middleware(['auth:sanctum']);

Route::get('/theater', [BioskopController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/theater/{id}', [BioskopController::class, 'detail'])->middleware(['auth:sanctum']);


Route::get('/get-film', [FilmController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/get-film/{id}', [FilmController::class, 'detail'])->middleware(['auth:sanctum']);


Route::get('/show', [ShowingController::class, 'index'])->middleware(['auth:sanctum']);


Route::get('/get-location', [LocationController::class, 'index'])->middleware(['auth:sanctum']);


Route::get('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);
Route::get('/me', [AuthenticationController::class, 'me'])->middleware(['auth:sanctum']);
