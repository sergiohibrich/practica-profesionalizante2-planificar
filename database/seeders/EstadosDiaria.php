<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosDiaria extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_diaria') -> insert ([
            ["estado" => "en espera",
            "fecha" => "2025-11-28",
            "planificacion_diaria_id" => 6,
            ]
        ]);
        //
    }
}
