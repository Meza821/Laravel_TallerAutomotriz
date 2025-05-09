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
        //TABLA DEL EMISOR
        Schema::create('emisor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nit', 25);
            $table->string('nrc', 25);
            $table->string('nombre', 255);
            $table->string('nombre_comercial', 255);
            $table->string('actividad_economica', 255);
            $table->string('departamento', 255);
            $table->string('municipio', 255);
            $table->string('direccion', 255);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emisor');
    }
};
