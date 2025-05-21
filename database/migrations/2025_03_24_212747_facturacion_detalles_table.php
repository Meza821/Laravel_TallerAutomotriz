<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('factura_detalles', function (Blueprint $table) {
            // Crea el campo 'id', que es autoincrementable y sirve como clave primaria
            $table->id();

            $table->unsignedBigInteger('idFactura'); // id de la factura vinculada a factura_detalles
             $table->foreign('idFactura')->references('id')->on('facturas');

            // Código del producto o servicio (máximo 50 caracteres)
            $table->integer('idProducto')->nullable(); // id del producto o servicio (nullable)
            // Cantidad del producto o servicio
            $table->integer('cantidad')->default(1); // Si no se especifica la cantidad, será 1.

            // Descripción del producto o servicio (máximo 500 caracteres)
            $table->string('descripcion', 500)->nullable();  // Descripción es opcional (nullable)

            // Precio unitario del producto o servicio
            $table->decimal('precio_unitario', 10, 2)->default(0); // Precio con 2 decimales

            // Si la línea está relacionada con ventas no sujetas o gravadas, por ejemplo:
            // Ventas exentas o ventas gravadas para IVA
            $table->decimal('venta_exenta', 10, 2)->default(0); // Ventas exentas de IVA
            $table->decimal('venta_gravada', 10, 2)->default(0); // Ventas gravadas con IVA

            $table->decimal('total', 10, 2)->default(0); // Total por producto o servicio ejemplo si llevan 1 de 100$ son 100$ y si llevan 2 de 100$ son 200$
            // Timestamps para registrar 'created_at' y 'updated_at'
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
