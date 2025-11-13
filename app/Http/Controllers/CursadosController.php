<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class CursadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        try {
            $cursados = DB::table('cursados')->get();
            return response()->json($cursados, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al cargar los cursados.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $datosValidados = $request->validate([
            'anio_lectivo' => 'required|string|max:40',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'cursos_id' => 'required|integer|exists:cursos,id',
        ]);

        try {
            $cursadoId = DB::table('cursados')->insertGetId([
                'anio_lectivo' => $datosValidados['anio_lectivo'],
                'fecha_inicio' => $datosValidados['fecha_inicio'],
                'fecha_fin' => $datosValidados['fecha_fin'],
                'cursos_id' => $datosValidados['cursos_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $cursado = DB::table('cursados')->where('id', $cursadoId)->first();
            return response()->json($cursado, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el cursado.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $cursado = DB::table('cursados')->where('id', $id)->first();

        if (!$cursado) {
            return response()->json(['message' => 'Cursado no encontrado.'], 404);
        }

        return response()->json($cursado, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $datosValidados = $request->validate([
            'anio_lectivo' => 'sometimes|string|max:40',
            'fecha_inicio' => 'sometimes|date',
            'fecha_fin' => 'sometimes|date|after:fecha_inicio',
            'cursos_id' => 'sometimes|integer|exists:cursos,id',
        ]);

        try {
            $registros = DB::table('cursados')
                ->where('id', $id)
                ->update(array_merge($datosValidados, ['updated_at' => now()]));

            if ($registros === 0 && !DB::table('cursados')->where('id', $id)->exists()) {
                return response()->json(['message' => 'Cursado no encontrado para actualizar.'], 404);
            }

            $cursadoActualizado = DB::table('cursados')->where('id', $id)->first();
            return response()->json($cursadoActualizado, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al actualizar el cursado.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $registroEliminar = DB::table('cursados')->where('id', $id)->delete();

            if ($registroEliminar === 0) {
                return response()->json(['message' => 'Cursado no encontrado para eliminar.'], 404);
            }
        } catch (QueryException $e) {
            // codigo 23000: violacion a la integridad definida en la tabla de la BBDD
            if ($e->getCode() === '23000') {
                return response()->json([
                    'message' => 'No se puede eliminar el Cursado. Existen relaciones activas en persona_cargo_cursado.'
                ], 409);
            }
            return response()->json(['message' => 'Error inesperado al intentar eliminar el cursado.', 'error' => $e->getMessage()], 500);
        }

        return response()->json(null, 204);
    }
}
