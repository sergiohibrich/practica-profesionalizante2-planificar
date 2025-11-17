<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

use App\Http\Controllers\PersonaCargosController;


Route::get('persona_cargos', [PersonaCargosController::class, 'index']);
Route::get('persona_cargos/{id}', [PersonaCargosController::class, 'show']);
Route::put('persona_cargos/{id}', [PersonaCargosController::class, 'update']);
Route::delete('persona_cargos/{id}', [PersonaCargosController::class, 'destroy']);
Route::post('persona_cargos', [PersonaCargosController::class, 'store']);
