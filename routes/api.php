<?php

use App\Http\Controllers\PlanificacionDiariaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//                          RUTAS planificacion_diaria

Route::get('/planificacion_diaria', [PlanificacionDiariaController::class, 'index']);

Route::get('/planificacion_diaria/{id}', [PlanificacionDiariaController::class, 'show']);

Route::post('/planificacion_diaria', [PlanificacionDiariaController::class, 'store']);

Route::delete('/planificacion_diaria/{id}', [PlanificacionDiariaController::class, 'destroy']);

Route::put('/planificacion_diaria/{id}', [PlanificacionDiariaController::class, 'update']);

//                          RUTAS estados_diaria
