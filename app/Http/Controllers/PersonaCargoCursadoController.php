<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class PersonaCargoCursadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): JsonResponse
    {
        try {
            $asignaciones = DB::table('persona_cargo_cursado')->get();
            return response()->json($asignaciones, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al cargar los registros.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request): JsonResponse
    {
        $datosValidados = $request->validate([
            'persona_cargos_id' => 'required|integer|exists:persona_cargos,id',
            'cursados_id' => 'required|integer|exists:cursados,id',
        ]);

        $registroExistente = DB::table('persona_cargo_cursado')
            ->where('persona_cargos_id', $datosValidados['persona_cargos_id'])
            ->where('cursados_id', $datosValidados['cursados_id'])
            ->exists();

        if ($registroExistente) {
            return response()->json(['message' => 'Registro ya existente.'], 409);
        }

        try {
            $id = DB::table('persona_cargo_cursado')->insertGetId([
                'persona_cargos_id' => $datosValidados['persona_cargos_id'],
                'cursados_id' => $datosValidados['cursados_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $asignacion = DB::table('persona_cargo_cursado')->where('id', $id)->first();
            return response()->json($asignacion, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el registro.', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id): JsonResponse
    {
        $asignacion = DB::table('persona_cargo_cursado')->where('id', $id)->first();

        if (!$asignacion) {
            return response()->json(['message' => 'Registro no encontrada.'], 404);
        }

        return response()->json($asignacion, 200);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id): JsonResponse
    {
        $datosValidados = $request->validate([
            'persona_cargos_id' => 'sometimes|integer|exists:persona_cargos,id',
            'cursados_id' => 'sometimes|integer|exists:cursados,id',
        ]);

        try {
            $registros = DB::table('persona_cargo_cursado')
                ->where('id', $id)
                ->update(array_merge($datosValidados, ['updated_at' => now()]));

            if ($registros === 0 && !DB::table('persona_cargo_cursado')->where('id', $id)->exists()) {
                return response()->json(['message' => 'Registro no encontrado para actualizar.'], 404);
            }

            $asignacionActualizada = DB::table('persona_cargo_cursado')->where('id', $id)->first();
            return response()->json($asignacionActualizada, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al actualizar el registro', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id): JsonResponse
    {
        try {
            $deleted = DB::table('persona_cargo_cursado')->where('id', $id)->delete();

            if ($deleted === 0) {
                return response()->json(['message' => 'Registro no encontrado para eliminar.'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al intentar eliminar el registro.', 'error' => $e->getMessage()], 500);
        }

        return response()->json(null, 204);
    }
}
