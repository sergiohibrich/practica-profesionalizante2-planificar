<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaCargoCursadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persona_cargo_cursado')->insert([
            [
                'persona_cargos_id' => 1,
                'cursados_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 2,
                'cursados_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 3,
                'cursados_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 4,
                'cursados_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 5,
                'cursados_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 6,
                'cursados_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 7,
                'cursados_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 8,
                'cursados_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 9,
                'cursados_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'persona_cargos_id' => 10,
                'cursados_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
