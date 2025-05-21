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
        Schema::create('facturas_json', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('idFactura'); // id de la factura vinculada a factura_detalles
             $table->foreign('idFactura')->references('id')->on('facturas');
             $table->char('Is_send'); // Y = Enviado, N = No enviado
             $table->json('json'); // json de la factura
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas_json');
    }
};
