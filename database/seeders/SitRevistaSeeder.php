<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SitRevistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sit_revista')->insert([
            ['revista'=>'Titular', 'created_at' => now(), 'updated_at' => now()],
            ['revista'=>'Interino', 'created_at' => now(), 'updated_at' => now()],
            ['revista'=>'Suplente', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
