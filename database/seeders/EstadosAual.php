<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosAual extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_anual')->insert([
            [
                'estado' => 'Pendiente',
                'fecha' => '2024-01-01',
                'planificacion_anual_id' => null
            ],
            [
                'estado' => 'En Proceso',
                'fecha' => '2024-01-01', 
                'planificacion_anual_id' => null
            ],
            [
                'estado' => 'Completado',
                'fecha' => '2024-01-01',
                'planificacion_anual_id' => null
            ],
            [
                'estado' => 'Cancelado',
                'fecha' => '2024-01-01',
                'planificacion_anual_id' => null
            ]
        ]);
    }
}  
    

