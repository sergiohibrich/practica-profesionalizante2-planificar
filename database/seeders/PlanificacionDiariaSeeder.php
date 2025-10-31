<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanificacionDiariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planificacion_diaria') -> insert ([
            ['fecha_estimada' => "2025-11-28",
            'fecha_desarrollada' => "2025-11-28",
            'fecha_presentacion' => "2025-11-28",
            'contenidos_especificos' => "aca van los contenidos especificos de la planificacion ",
            'actividades' => "aca van las actividades de la planificacion",
            'tareas' => "aca van las tareas de la planificacion",
            'tipo_planificacion' => "semanal",
            'persona_cargo_cursada_id' => 8]
        ]);
        //
    }
}
