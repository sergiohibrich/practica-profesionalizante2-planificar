<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaCargoCursadoController;

Route::get('persona-cargo-cursado', [PersonaCargoCursadoController::class, 'index']);
Route::get('persona-cargo-cursado/{id}', [PersonaCargoCursadoController::class, 'show']);
Route::put('persona-cargo-cursado/{id}', [PersonaCargoCursadoController::class, 'update']);
Route::delete('persona-cargo-cursado/{id}', [PersonaCargoCursadoController::class, 'destroy']);
Route::post('persona-cargo-cursado', [PersonaCargoCursadoController::class, 'store']);
