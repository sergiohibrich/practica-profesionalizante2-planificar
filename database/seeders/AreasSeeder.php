<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->insert([
            [
                'area' => 'Matemáticas',
                'tipo' => 'Ciencias Exactas'
            ],
            [
                'area' => 'Lengua y Literatura',
                'tipo' => 'Humanidades'
            ],
            [
                'area' => 'Ciencias Sociales',
                'tipo' => 'Humanidades'
            ],
            [
                'area' => 'Biología',
                'tipo' => 'Ciencias Naturales'
            ],
            [
                'area' => 'Física',
                'tipo' => 'Ciencias Naturales'
            ],
            [
                'area' => 'Química',
                'tipo' => 'Ciencias Naturales'
            ],
            [
                'area' => 'Historia',
                'tipo' => 'Humanidades'
            ],
            [
                'area' => 'Geografía',
                'tipo' => 'Humanidades'
            ],
            [
                'area' => 'Educación Física',
                'tipo' => 'Salud y Bienestar'
            ],
            [
                'area' => 'Arte',
                'tipo' => 'Humanidades'
            ]
        ]);
    }
}
