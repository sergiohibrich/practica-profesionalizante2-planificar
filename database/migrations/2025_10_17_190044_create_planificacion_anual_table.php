<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('planificacion_anual', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_presentacion');
            $table->string('aprendizajes_esperados');
            $table->string('saberes');
            $table->string('criterios');
            $table->string('bibliografia');
            $table->string('diagnostico');
            $table->unsignedBigInteger('areas_planificacion_id');
            $table->unsignedBigInteger('persona_cargo_cursada_id');
            $table->string('tipo_planificacion');
            $table->unsignedBigInteger('estado_anual_id');
            $table->timestamps();

            // Claves foráneas
            $table->foreign('areas_planificacion_id')
                  ->references('id')->on('areas_planificacion')
                  ->onDelete('cascade');
            $table->foreign('persona_cargo_cursada_id')
                  ->references('id')->on('persona_cargo_cursado')
                  ->onDelete('cascade');
            $table->foreign('estado_anual_id')
                  ->references('id')->on('estados_anual')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planificacion_anual');
    }
};
