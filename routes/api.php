<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursadosController;


Route::get('cursados', [CursadosController::class, 'index']);
Route::get('cursados/{id}', [CursadosController::class, 'show']);
Route::put('cursados/{id}', [CursadosController::class, 'update']);
Route::delete('cursados/{id}', [CursadosController::class, 'destroy']);
Route::post('cursados', [CursadosController::class, 'store']);
use App\Http\Controllers\PersonaCargoCursadoController;

Route::get('persona-cargo-cursado', [PersonaCargoCursadoController::class, 'index']);
Route::get('persona-cargo-cursado/{id}', [PersonaCargoCursadoController::class, 'show']);
Route::put('persona-cargo-cursado/{id}', [PersonaCargoCursadoController::class, 'update']);
Route::delete('persona-cargo-cursado/{id}', [PersonaCargoCursadoController::class, 'destroy']);
Route::post('persona-cargo-cursado', [PersonaCargoCursadoController::class, 'store']);
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\CursosController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/personas',[PersonasController::class, 'index']);
Route::get('/personas/{id}',[PersonasController::class, 'show']);
Route::post('/personas', [PersonasController::class, 'store']);
Route::put('/personas/{id}', [PersonasController::class, 'update']);
Route::delete('/personas/{id}', [PersonasController::class, 'destroy']);
Route::get('/cursos', [CursosController::class,'index']);
Route::get('/cursos/{id}', [CursosController::class,'show']);
Route::post('/cursos', [CursosController::class,'store']);
Route::put('/cursos/{id}', [CursosController::class,'update']);
Route::delete('/cursos/{id}', [CursosController::class,'destroy']);

use App\Http\Controllers\CargosController;

Route::get('/cargos', [CargosController::class, 'index']);
Route::get('/cargos/{id}', [CargosController::class, 'show']);
Route::post('/cargos', [CargosController::class, 'store']);
Route::put('/cargos/{id}', [CargosController::class, 'update']);
Route::delete('/cargos/{id}', [CargosController::class, 'destroy']);
