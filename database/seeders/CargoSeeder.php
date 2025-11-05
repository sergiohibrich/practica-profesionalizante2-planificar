<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cargos')->insert([
            ['cargo'=>'Director 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Música', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial ED. Física', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Plástica', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Tecnología', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
