<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosDiariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_diaria') -> insert ([
            ["estado" => "en espera",
            "fecha" => "2025-11-28",
            "planificacion_diaria_id" => 1,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Pendiente',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'En Proceso',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Completado',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Cancelado',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Revisado',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Aprobado',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Archivado',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Rechazado',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'En Espera',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 6,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'estado' => 'Finalizado',
            'fecha' => '2024-01-01',
            'planificacion_diaria_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
            ]
        ]);
        //
    }
}
