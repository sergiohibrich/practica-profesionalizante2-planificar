<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert([
            ['ciclo' => 1, 'grado' => '1°', 'seccion' => 'A', 'turno' => 'Mañana', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 1, 'grado' => '2°', 'seccion' => 'B', 'turno' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 1, 'grado' => '3°', 'seccion' => 'C', 'turno' => 'Mañana', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 2, 'grado' => '4°', 'seccion' => 'A', 'turno' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 2, 'grado' => '5°', 'seccion' => 'B', 'turno' => 'Mañana', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 3, 'grado' => '6°', 'seccion' => 'C', 'turno' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 3, 'grado' => '7°', 'seccion' => 'A', 'turno' => 'Mañana', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 1, 'grado' => '1°', 'seccion' => 'B', 'turno' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 1, 'grado' => '3°', 'seccion' => 'A', 'turno' => 'Mañana', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 2, 'grado' => '4°', 'seccion' => 'C', 'turno' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 2, 'grado' => '5°', 'seccion' => 'A', 'turno' => 'Mañana', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 3, 'grado' => '6°', 'seccion' => 'B', 'turno' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 3, 'grado' => '7°', 'seccion' => 'C', 'turno' => 'Mañana', 'created_at' => now(), 'updated_at' => now()],
            ['ciclo' => 1, 'grado' => '2°', 'seccion' => 'C', 'turno' => 'Tarde', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}