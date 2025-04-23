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
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('dui', 10)->nullable()->after('nit');
            $table->string('tipo_persona', 50)->nullable()->after('nombre');
            $table->dropColumn('condicion_pago');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('dui');
            $table->dropColumn('tipo_persona');
            $table->string('condicion_pago')->nullable(); // Restauramos en el rollback
        });
    }
};
