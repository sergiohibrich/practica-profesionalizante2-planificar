<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Areas extends Seeder
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
            ]
        ]);
    }
}
