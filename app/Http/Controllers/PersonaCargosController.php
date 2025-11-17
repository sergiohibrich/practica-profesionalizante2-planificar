<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaCargosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::table('persona_cargos')->get();
    }
    
    public function cagosPersona()
    {
      $registros = DB::table('persona_cargos')
            ->join('personas', 'persona_cargos.personas_id', '=', 'personas.id')
            ->join('cargos', 'persona_cargos.cargos_id', '=', 'cargos.id')
            ->join('sit_revista', 'persona_cargos.sit_revista_id', '=', 'sit_revista.id')
            ->select(
                'persona_cargos.id',
                'personas.apellidos',
                'personas.nombres',
                'personas.dni',
                'personas.e-mail',
                'cargos.cargo',
                'sit_revista.revista',
                'persona_cargos.created_at',
                'persona_cargos.updated_at'
            )
            ->get();

        return response()->json($registros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       DB::table('persona_cargos')->insert([
            'personas_id' => $request->input('personas_id'),
            'cargos_id' => $request->input('cargos_id'),
            'sit_revista_id' => $request->input('sit_revista_id'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Registro creado correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = DB::table('persona_cargos')
            ->join('personas', 'persona_cargos.personas_id', '=', 'personas.id')
            ->join('cargos', 'persona_cargos.cargos_id', '=', 'cargos.id')
            ->join('sit_revista', 'persona_cargos.sit_revista_id', '=', 'sit_revista.id')
            ->select(
                'persona_cargos.id',
                'personas.apellidos',
                'personas.nombres',
                'personas.dni',
                'personas.e-mail',
                'cargos.cargo',
                'sit_revista.revista',
                'persona_cargos.created_at',
                'persona_cargos.updated_at'
            )
            ->where('persona_cargos.id', $id)
            ->first();

        if (!$registro) {
            return response()->json(['error' => 'Registro no encontrado']);
        }

        return response()->json($registro);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $actualizado = DB::table('persona_cargos')->where('id',"=", $id)->update([
            'personas_id' => $request['personas_id'],
            'cargos_id' => $request['cargos_id'],
            'sit_revista_id' => $request['sit_revista_id'],
            'updated_at' => now(),
        ]);

        if (!$actualizado) {
            return response()->json(['error' => 'Registro no encontrado o sin cambios']);
        }

        return response()->json(['message' => 'Registro actualizado correctamente']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado = DB::table('persona_cargos')->where('id', $id)->delete();

        if (!$eliminado) {
            return response()->json(['error' => 'Registro no encontrado']);
        }

        return response()->json(['message' => 'Registro eliminado correctamente']);

    }
}
