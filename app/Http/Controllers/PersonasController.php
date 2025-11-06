<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::table('personas')->get();
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
        DB::table('personas')->insert([
            'apellidos'=> $request['apellidos'],
            'nombres'=> $request['nombres'],
            'dni' => $request['dni'],
            'e-mail' => $request['e-mail'],
            'telefono' => $request['telefono'],
            'direccion' => $request['direccion'],
            'fecha_nacimiento' => $request['fecha_nacimiento']
        ]);
        return response()->json(['mensaje'=>'Persona agregada correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DB::table('personas')->where('id','=',$id)->get();
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
        DB::table('personas')->where('id', '=', $id)->update([
        'apellidos' => $request['apellidos'],
        'nombres' => $request['nombres'],
        'dni' => $request['dni'],
        'e-mail' => $request['e-mail'],
        'telefono' => $request['telefono'],
        'direccion' => $request['direccion'],
        'fecha_nacimiento' => $request['fecha_nacimiento']
    ]);

    return response()->json(['mensaje' => 'Persona actualizada correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('personas')->where('id', '=', $id)->delete();

    return response()->json(['mensaje' => 'Persona eliminada correctamente']);
    }
}
