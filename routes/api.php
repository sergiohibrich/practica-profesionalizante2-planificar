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

use App\Http\Controllers\SitRevistaController;

Route::get('/sit_revista', [SitRevistaController::class, 'index']);
Route::get('/sit_revista/{id}', [SitRevistaController::class, 'show']);
Route::post('/sit_revista', [SitRevistaController::class, 'store']);
Route::put('/sit_revista/{id}', [SitRevistaController::class, 'update']);
Route::delete('/sit_revista/{id}', [SitRevistaController::class, 'destroy']);