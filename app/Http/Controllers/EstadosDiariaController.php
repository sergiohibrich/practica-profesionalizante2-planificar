<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadosDiariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::table('estados_diaria')->get();
        //
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
        DB::table('estados_diaria')
        ->insert([
            "estado" => $request ["estado"],
            "fecha" => $request ["fecha"],
            "planificacion_diaria_id"=> $request ["planificacion_diaria_id"],
            "created_at"=> now(),
            "updated_at"=> now()
        ]);

        return response()->json(['mensaje' => 'El estas de agrego correctamente']);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DB::table('estados_diaria') ->where('id', '=', $id)->get();
        //
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
        DB::table('estados_diaria')-> where('id', '=', $id)
        -> update([
            "estado" => $request ["estado"],
            "fecha" => $request ["fecha"],
            "planificacion_diaria_id"=> $request ["planificacion_diaria_id"],
            "created_at"=> now(),
            "updated_at"=> now()
        ]);

        return response()->json(['mensaje' => 'El estado se actualizo correctamente']);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('estados_diaria')->where('id', '=', $id)->delete();
        return response()->json(['mensaje' => 'El estado se borro correctamente']);
        //
    }
}
