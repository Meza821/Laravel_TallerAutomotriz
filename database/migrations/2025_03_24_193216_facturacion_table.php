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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();

            // Fecha de emisión de la factura:
            $table->date('fecha')->nullable();
            //Relacion con la tabla cliente
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');


            // Datos fiscales
            $table->string('nota_remision', 50)->nullable();     // "Nota de Remisión"
            $table->string('condicion_pago', 100)->nullable();   // "Cond. de Pago" (ej. contado/crédito)

            // Totales de la factura
            $table->decimal('sumas', 10, 2)->default(0);              // Sumas
            $table->decimal('iva', 10, 2)->default(0);                // 13% IVA
            $table->decimal('subtotal', 10, 2)->default(0);           // Subtotal
            $table->decimal('iva_retenido', 10, 2)->default(0);       // (-) IVA retenido
            $table->decimal('ventas_no_sujetas', 10, 2)->default(0);  // Ventas no sujetas
            $table->decimal('ventas_exentas', 10, 2)->default(0);     // Ventas exentas
            $table->decimal('total', 10, 2)->default(0);              // Total final

            // Para llevar control interno (timestamps crea created_at / updated_at)
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
