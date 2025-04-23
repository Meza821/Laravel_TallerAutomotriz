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

            // Relación con la tabla 'facturas': cada línea de factura se vincula con una factura principal.
            // 'factura_id' será la clave foránea que referencia al 'id' de la tabla 'facturas'.
            $table->unsignedBigInteger('factura_id');
            // Relación de clave foránea: Esto crea una relación entre 'factura_id' y la columna 'id' de 'facturas'.
            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade');

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
