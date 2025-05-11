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
        Schema::create('distritos', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nombre_distrito', 100);       // Ej: "Apopa"
            $table->string('codigo_municipio', 20);        // Código oficial del nuevo municipio: "SSO1" (San Salvador Oeste)
            $table->string('nombre_municipio_oficial', 100); // Nombre oficial del municipio: "San Salvador Oeste"
            $table->string('cod_departamento',2); // Código del departamento al que pertenece el municipio: 1 (San Salvador)
            // Establecer la llave foránea con referencia a departamentos
             $table->foreign('cod_departamento')->references('codigo')->on('departamentos')
             ->onDelete('cascade'); // Si un departamento se elimina, también se elimina el distrito relacionado

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipios');
    }
};
