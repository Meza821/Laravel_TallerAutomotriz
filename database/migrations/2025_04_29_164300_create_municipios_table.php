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
            $table->id();
            $table->string('nombre_distrito', 100);       // Ej: "Apopa"
            $table->string('codigo_municipio', 20);        // Código oficial del nuevo municipio: "SSO1" (San Salvador Oeste)
            $table->string('nombre_municipio_oficial', 100); // Nombre oficial del municipio: "San Salvador Oeste"
            $table->foreignId('departamento_id')->constrained('departamentos')->onDelete('cascade');
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
