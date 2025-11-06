<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/personas',[PersonasController::class, 'index']);
Route::get('/personas/{id}',[PersonasController::class, 'show']);
Route::post('/personas', [PersonasController::class, 'store']);
Route::put('/personas/{id}', [PersonasController::class, 'update']);
Route::delete('/personas/{id}', [PersonasController::class, 'destroy']);
