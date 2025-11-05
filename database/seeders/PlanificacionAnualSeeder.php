<?php

namespace Database\Seeders;

# use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PlanificacionAnualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planificacion_anual')->insert([
            [
                'fecha_presentacion' => '2025-03-15',
                'aprendizajes_esperados' => 'Comprender conceptos fundamentales del área',
                'saberes' => 'Teóricos y prácticos relacionados al contenido anual',
                'criterios' => 'Participación, evaluación continua y proyectos integradores',
                'bibliografia' => 'Sommerville, Ian. Ingeniería de Software. 10ma edición',
                'diagnostico' => 'Buen nivel general con algunas dificultades de aplicación',
                'areas_id' => 1,
                'persona_cargo_cursado_id' => 1,
                'tipo_planificacion' => 'Anual',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fecha_presentacion' => '2025-03-20',
                'aprendizajes_esperados' => 'Desarrollar habilidades de pensamiento crítico',
                'saberes' => 'Conceptos interdisciplinares aplicados a la práctica',
                'criterios' => 'Evaluación continua y resolución de problemas',
                'bibliografia' => 'Pressman, Ingeniería del Software. 9na edición',
                'diagnostico' => 'Grupo heterogéneo con potencial alto de aprendizaje',
                'areas_id' => 2,
                'persona_cargo_cursado_id' => 2,
                'tipo_planificacion' => 'Trimestral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
