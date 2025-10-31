<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CursoSeeder::class);
        $this->call(CargoSeeder::class);
        $this->call(PersonaCargoSeeder::class);
        $this->call(SitRevistaSeeder::class);
    
    }
}
