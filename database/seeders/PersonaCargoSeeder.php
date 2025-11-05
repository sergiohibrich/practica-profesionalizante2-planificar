<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaCargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persona_cargos')->insert([
            ['personas_id' => 1, 'cargos_id' => 1, 'sit_revista_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 2, 'cargos_id' => 4, 'sit_revista_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 3, 'cargos_id' => 7, 'sit_revista_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 4, 'cargos_id' => 2, 'sit_revista_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 5, 'cargos_id' => 3, 'sit_revista_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 6, 'cargos_id' => 5, 'sit_revista_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 7, 'cargos_id' => 6, 'sit_revista_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 8, 'cargos_id' => 8, 'sit_revista_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 9, 'cargos_id' => 9, 'sit_revista_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['personas_id' => 10, 'cargos_id' => 10, 'sit_revista_id' => 1, 'created_at' => now(), 'updated_at' => now()],

        ]);

    }
}
