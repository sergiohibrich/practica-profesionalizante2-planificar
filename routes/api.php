<?php

use App\Http\Controllers\EstadosDiariaController;       // Importa el controlador de EstadosDiariaController.
use App\Http\Controllers\PlanificacionDiariaController;       // Importa el controlador de PlanificacionDiariaController.
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


//                          RUTAS planificacion_diaria

// Esta ruta muestra todas las planificaciones diarias de la base de datos en formato JSON.
Route::get('/planificacion_diaria', [PlanificacionDiariaController::class, 'index']);

// Esta ruta muestra una planificación diaria de la base de datos en formato JSON según su id.
Route::get('/planificacion_diaria/{id}', [PlanificacionDiariaController::class, 'show']);

// Esta ruta agrega una planificación diaria a la base de datos en formato JSON.
Route::post('/planificacion_diaria', [PlanificacionDiariaController::class, 'store']);

// Esta ruta borra una planificacion diaria de la base de datos en formato JSON según su id.
Route::delete('/planificacion_diaria/{id}', [PlanificacionDiariaController::class, 'destroy']);

// Esta ruta actualiza una planificacion diaria de la base de datos en formato JSON según su id.
Route::put('/planificacion_diaria/{id}', [PlanificacionDiariaController::class, 'update']);




//                          RUTAS estados_diaria

// Esta ruta muestra todos los estados de las planificaciones diarias de la base de datos en formato JSON.
Route::get('/estados_diaria', [EstadosDiariaController::class, 'index']);

// Esta ruta muestra uno de los estados de la planificación diaria de la base de datos en formato JSON según su id.
Route::get('/estados_diaria/{id}', [EstadosDiariaController::class, 'show']);

// Esta ruta agrega un estado de la planificación diaria a la base de datos en formato JSON.
Route::post('/estados_diaria', [EstadosDiariaController::class, 'store']);

// Esta ruta borra un estado de la planificacion diaria de la base de datos en formato JSON según su id.
Route::delete('/estados_diaria/{id}', [EstadosDiariaController::class, 'destroy']);

// Esta ruta actualiza un estado de la planificacion diaria de la base de datos en formato JSON según su id.

Route::put('/estados_diaria/{id}', [EstadosDiariaController::class, 'update']);
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
