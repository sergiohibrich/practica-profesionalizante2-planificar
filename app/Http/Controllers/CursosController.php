<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::table('cursos')->get();
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
        DB::table('cursos')->insert([
            'ciclo' => $request['ciclo'],
            'grado' => $request['grado'],
            'seccion' => $request['seccion'],
            'turno' => $request['turno']
        ]);
        return response()->json(['message' => 'Curso creado exitosamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DB::table('cursos')->where('id',"=", $id)->get();

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
        DB::table('cursos')->where('id',"=", $id)->update([
            'ciclo' => $request['ciclo'],
            'grado' => $request['grado'],
            'seccion' => $request['seccion'],
            'turno' => $request['turno']
        ]);
        return response()->json(['message' => 'Curso actualizado exitosamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cursos')->where('id',"=", $id)->delete();
        return response()->json(['message' => 'Curso eliminado exitosamente']);
    }
}
