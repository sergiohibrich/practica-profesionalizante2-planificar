<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursadosController;


Route::get('cursados', [CursadosController::class, 'index']);
Route::get('cursados/{id}', [CursadosController::class, 'show']);
Route::put('cursados/{id}', [CursadosController::class, 'update']);
Route::delete('cursados/{id}', [CursadosController::class, 'destroy']);
Route::post('cursados', [CursadosController::class, 'store']);
