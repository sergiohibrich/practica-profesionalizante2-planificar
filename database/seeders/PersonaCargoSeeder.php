<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['persona_id'=>1, 'cargo_id'=>1, 'created_at' => now(), 'updated_at' => now()],
            ['persona_id'=>2, 'cargo_id'=>10, 'created_at' => now(), 'updated_at' => now()],
            ['persona_id'=>3, 'cargo_id'=>19, 'created_at' => now(), 'updated_at' => now()],
            ['persona_id'=>4, 'cargo_id'=>28, 'created_at' => now(), 'updated_at' => now()],
            ['persona_id'=>5, 'cargo_id'=>31, 'created_at' => now(), 'updated_at' => now()],
            

        ]);

    }
}
