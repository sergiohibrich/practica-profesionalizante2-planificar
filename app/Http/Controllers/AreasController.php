<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreasController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        return DB::table('areas')->get();
    }

    // Crear un nuevo registro
    public function store(Request $request)
    {
        $id = DB::table('areas')->insertGetId([
            'area' => $request->area,
            'tipo' => $request->tipo,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $area = DB::table('areas')->where('id', $id)->first();

        return [
            'mensaje' => 'datos creados correctamente',
            'area' => $area
        ];
    }

    // Mostrar un registro por ID
    public function show($id)
    {
        return DB::table('areas')->where('id', $id)->first();
    }

    // Actualizar un registro
    public function update(Request $request, $id)
    {
        DB::table('areas')
            ->where('id', $id)
            ->update([
                'area' => $request->area,
                'tipo' => $request->tipo,
                'updated_at' => now(),
            ]);

        $area = DB::table('areas')->where('id', $id)->first();

        return [
            'mensaje' => 'datos actualizado correctamente',
            'area' => $area
        ];
    }

    // Eliminar un registro
    public function destroy($id)
    {
        DB::table('areas')->where('id', $id)->delete();

        return [
            'mensaje' => 'datos eliminado correctamente'
        ];
    }
}