<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::table('cargos')->get();
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
        DB::table('cargos')->insert([
            'cargo' => $request['cargo']
        ]);
        return response()->json(['message'=>'Cargo se agregó con éxito ']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DB::table('cargos')->where('id','=', $id)->get();
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
        $updated = DB::table('cargos')->where('id', $id)->update([
            'cargo' => $request['cargo'],
            'updated_at' => now(),
        ]);

        if ($updated) {
            return response()->json(['message' => 'Cargo actualizado correctamente'], 200);
        } else {
            return response()->json(['message' => 'No se encontró el cargo o no se realizan cambios'], 404);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         DB::table('cargos')->where('id', '=', $id)->delete();

    return response()->json(['mensaje' => 'cargo eliminado con éxito']);
    }
}
