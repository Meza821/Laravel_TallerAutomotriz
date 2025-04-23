<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motocicletas', function (Blueprint $table) {
            $table->id();

            // Clave foránea hacia clientes
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');

            // Datos de la motocicleta
            $table->string('marca', 100);
            $table->string('modelo', 100);
            $table->string('cc', 5);
            $table->string('color', 50)->nullable();
            $table->string('placa', 20)->unique();
            $table->string('anio', 4)->nullable(); // año de fabricación
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motocicletas');
    }
};
