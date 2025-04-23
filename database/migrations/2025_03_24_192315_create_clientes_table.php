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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->string('direccion', 500)->nullable();
            $table->string('departamento', 150)->nullable();
            $table->string('numero_registro', 50)->nullable();
            $table->string('nit', 20)->nullable();
            $table->string('giro', 100)->nullable();
            $table->string('condicion_pago', 100)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
