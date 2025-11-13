<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\areasController;
use App\Http\Controllers\estados_anualController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('areas', areasController::class);
Route::apiResource('estados_anual',estados_anualController::class);