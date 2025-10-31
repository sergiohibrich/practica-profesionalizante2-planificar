<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursados')->insert([
            [
                'anio_lectivo' => '2024',
                'fecha_inicio' => '2024-03-01',
                'fecha_fin' => '2024-12-10',
                'cursos_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2024',
                'fecha_inicio' => '2024-03-01',
                'fecha_fin' => '2024-12-10',
                'cursos_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2023',
                'fecha_inicio' => '2023-03-01',
                'fecha_fin' => '2023-12-15',
                'cursos_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2025',
                'fecha_inicio' => '2025-03-01',
                'fecha_fin' => '2025-07-30',
                'cursos_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2024',
                'fecha_inicio' => '2024-03-01',
                'fecha_fin' => '2024-12-10',
                'cursos_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2023',
                'fecha_inicio' => '2023-03-01',
                'fecha_fin' => '2023-12-15',
                'cursos_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2024',
                'fecha_inicio' => '2024-03-01',
                'fecha_fin' => '2024-12-10',
                'cursos_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2025',
                'fecha_inicio' => '2025-03-01',
                'fecha_fin' => '2025-07-30',
                'cursos_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2024',
                'fecha_inicio' => '2024-03-01',
                'fecha_fin' => '2024-12-10',
                'cursos_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'anio_lectivo' => '2023',
                'fecha_inicio' => '2023-03-01',
                'fecha_fin' => '2023-12-15',
                'cursos_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
