<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personas')->insert([
            [
                'nombres' => 'Ana',
                'apellidos' => 'Molina',
                'dni' => 40123456,
                'e-mail' => 'ana.molina@example.com',
                'telefono' => '3511111111',
                'direccion' => 'Calle Falsa 123',
                'fecha_nacimiento' => '2000-05-15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Pedro',
                'apellidos' => 'Gómez',
                'dni' => 39234567,
                'e-mail' => 'pedro.gomez@example.com',
                'telefono' => '3512222222',
                'direccion' => 'Av. Siempre Viva 742',
                'fecha_nacimiento' => '1998-08-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Laura',
                'apellidos' => 'Fernández',
                'dni' => 41234567,
                'e-mail' => 'laura.fernandez@example.com',
                'telefono' => '3513333333',
                'direccion' => 'San Martín 456',
                'fecha_nacimiento' => '1995-03-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Martín',
                'apellidos' => 'López',
                'dni' => 42345678,
                'e-mail' => 'martin.lopez@example.com',
                'telefono' => '3514444444',
                'direccion' => 'Independencia 234',
                'fecha_nacimiento' => '1999-11-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Ana',
                'apellidos' => 'Pérez',
                'dni' => 43456789,
                'e-mail' => 'ana.perez@example.com',
                'telefono' => '3515555555',
                'direccion' => 'Belgrano 789',
                'fecha_nacimiento' => '2001-06-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Carlos',
                'apellidos' => 'Ramírez',
                'dni' => 44567890,
                'e-mail' => 'carlos.ramirez@example.com',
                'telefono' => '3516666666',
                'direccion' => 'Rivadavia 321',
                'fecha_nacimiento' => '1997-02-28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Lucía',
                'apellidos' => 'Martínez',
                'dni' => 45678901,
                'e-mail' => 'lucia.martinez@example.com',
                'telefono' => '3517777777',
                'direccion' => 'Ituzaingó 654',
                'fecha_nacimiento' => '2002-09-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Diego',
                'apellidos' => 'Sánchez',
                'dni' => 46789012,
                'e-mail' => 'diego.sanchez@example.com',
                'telefono' => '3518888888',
                'direccion' => '9 de Julio 987',
                'fecha_nacimiento' => '1996-12-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Mariana',
                'apellidos' => 'Torres',
                'dni' => 47890123,
                'e-mail' => 'mariana.torres@example.com',
                'telefono' => '3519999999',
                'direccion' => 'Bv. Illia 2020',
                'fecha_nacimiento' => '1994-04-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombres' => 'Federico',
                'apellidos' => 'Castro',
                'dni' => 48901234,
                'e-mail' => 'federico.castro@example.com',
                'telefono' => '3511010101',
                'direccion' => 'Av. Colón 555',
                'fecha_nacimiento' => '1993-01-30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
