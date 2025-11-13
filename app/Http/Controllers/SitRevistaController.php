<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitRevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::table('sit_revista')->get();
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
        DB::table('sit_revista')->insert([
            'revista' => $request['revista'],
        ]);
        return response()->json(['message' => 'revista fue creada con éxito ']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return DB::table('sit_revista')->where('id',"=", $id)->get();
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
        DB::table('sit_revista')->where('id',"=", $id)->update([
            'revista' => $request['revista'],
        ]);
        return response()->json(['message' => 'revista actualizada con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('sit_revista')->where('id',"=", $id)->delete();
        return response()->json(['message' => 'revista eliminada con exito']);
    }
}
