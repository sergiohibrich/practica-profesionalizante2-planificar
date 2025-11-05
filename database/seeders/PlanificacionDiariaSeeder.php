<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'persona_cargo_cursado_id' => 8],
            [
            'fecha_estimada' => "2025-11-29",
            'fecha_desarrollada' => "2025-11-29",
            'fecha_presentacion' => "2025-11-29",
            'contenidos_especificos' => "contenidos ejemplo 2",
            'actividades' => "actividades ejemplo 2",
            'tareas' => "tareas ejemplo 2",
            'tipo_planificacion' => "diaria",
            'persona_cargo_cursado_id' => 1
        ],
        [
            'fecha_estimada' => "2025-11-30",
            'fecha_desarrollada' => "2025-11-30",
            'fecha_presentacion' => "2025-11-30",
            'contenidos_especificos' => "contenidos ejemplo 3",
            'actividades' => "actividades ejemplo 3",
            'tareas' => "tareas ejemplo 3",
            'tipo_planificacion' => "mensual",
            'persona_cargo_cursado_id' => 2
        ],
        [
            'fecha_estimada' => "2025-12-01",
            'fecha_desarrollada' => "2025-12-01",
            'fecha_presentacion' => "2025-12-01",
            'contenidos_especificos' => "contenidos ejemplo 4",
            'actividades' => "actividades ejemplo 4",
            'tareas' => "tareas ejemplo 4",
            'tipo_planificacion' => "semanal",
            'persona_cargo_cursada_id' => 3
        ],
        [
            'fecha_estimada' => "2025-12-02",
            'fecha_desarrollada' => "2025-12-02",
            'fecha_presentacion' => "2025-12-02",
            'contenidos_especificos' => "contenidos ejemplo 5",
            'actividades' => "actividades ejemplo 5",
            'tareas' => "tareas ejemplo 5",
            'tipo_planificacion' => "diaria",
            'persona_cargo_cursado_id' => 4
        ],
        [
            'fecha_estimada' => "2025-12-03",
            'fecha_desarrollada' => "2025-12-03",
            'fecha_presentacion' => "2025-12-03",
            'contenidos_especificos' => "contenidos ejemplo 6",
            'actividades' => "actividades ejemplo 6",
            'tareas' => "tareas ejemplo 6",
            'tipo_planificacion' => "mensual",
            'persona_cargo_cursado_id' => 5
        ],
        [
            'fecha_estimada' => "2025-12-04",
            'fecha_desarrollada' => "2025-12-04",
            'fecha_presentacion' => "2025-12-04",
            'contenidos_especificos' => "contenidos ejemplo 7",
            'actividades' => "actividades ejemplo 7",
            'tareas' => "tareas ejemplo 7",
            'tipo_planificacion' => "diaria",
            'persona_cargo_cursado_id' => 6
        ],
        [
            'fecha_estimada' => "2025-12-05",
            'fecha_desarrollada' => "2025-12-05",
            'fecha_presentacion' => "2025-12-05",
            'contenidos_especificos' => "contenidos ejemplo 8",
            'actividades' => "actividades ejemplo 8",
            'tareas' => "tareas ejemplo 8",
            'tipo_planificacion' => "semanal",
            'persona_cargo_cursado_id' => 7
        ],
        [
            'fecha_estimada' => "2025-12-06",
            'fecha_desarrollada' => "2025-12-06",
            'fecha_presentacion' => "2025-12-06",
            'contenidos_especificos' => "contenidos ejemplo 9",
            'actividades' => "actividades ejemplo 9",
            'tareas' => "tareas ejemplo 9",
            'tipo_planificacion' => "mensual",
            'persona_cargo_cursado_id' => 8
        ],
        [
            'fecha_estimada' => "2025-12-07",
            'fecha_desarrollada' => "2025-12-07",
            'fecha_presentacion' => "2025-12-07",
            'contenidos_especificos' => "contenidos ejemplo 10",
            'actividades' => "actividades ejemplo 10",
            'tareas' => "tareas ejemplo 10",
            'tipo_planificacion' => "diaria",
            'persona_cargo_cursado_id' => 9
        ]

        ]);
        //
    }
}
