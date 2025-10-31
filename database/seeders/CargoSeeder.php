<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['cargo'=>'Director Titular 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Interino 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Suplente 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Titular 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Interino 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Suplente 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Titular 3°', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Interino 3°', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Director Suplente 3°', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Titular 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Interino 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Suplente 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Titular2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Interino 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Suplente 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Titular 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Interino 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Vice-Director Suplente 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Titular 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Interino 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Suplente 1° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Titular 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Interino 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Suplente 2° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Titular 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Interino 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Secretario Suplente 3° categoria', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Titular', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Interino', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Suplente', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Musica Titular', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Musica Interino', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Musica Suplente', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial ED. Física Titular', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial ED. Física Interino', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial ED. Física Suplente', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Plástica Titular', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Plástica Interino', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Plástica Suplente', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Tecnología Titular', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Tecnología Interino', 'created_at' => now(), 'updated_at' => now()],
            ['cargo'=>'Maestro Especial Tecnología Suplente', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}   