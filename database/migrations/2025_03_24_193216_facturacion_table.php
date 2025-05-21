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

            //Validacion factura
            $table->string('estado'); // Procesado
            $table->string('clasificacionMsg', 5); // Clasificación Mensaje
            $table->string('codigoMsg', 5); // Codigo Mensaje
            $table->string('descripcionMsg'); // Descripcion del Mensaje
            $table->date('fechaProcesamiento'); // Fecha de procesamiento
            $table->integer('version'); // Version
            $table->integer('ambiente'); // Ambiente (00=Producción, 01=Pruebas)
            $table->string('tipoDte'); // Tipo DTE (01 Factura Electronica, 03 Comprobante de credito Fiscal)
            $table->string('numeroControl', 31); // Numero de control
            $table->string('codigoGeneracion', 36); // Codigo de Generacion Hexadecimal 36 valores
            $table->string('tipoModelo', 1); // Se ingresara el codigo 1 para modelo de facturacion previo en todos los DTES
            $table->string('tipOperacion', 1); // Tipo de operacion 1
            $table->string('tipoContingencia', 1); // Tipo de contingencia -> null
            $table->string('motivoContin', 1); // Motivo de contingencia -> null
            $table->string('tipoTransmision', 1); // Se ingresara el tipo de transmision normal codigo 1 en todos los DTES
            $table->string('selloRecibido'); // Sello recibido
            $table->string('fechaGeneracion', 10); // Fecha de Generacion -> convertir a YYYY-MM-DD
            $table->string('horaGeneracion', 10); // Hora de Generacion -> convertir a HH:MM:SS format 24 horas
            $table->string('tipoMoneda', 3); // Tipo de Moneda USD
            $table->string('numDocumento', 14); // Numero de documento DUI O NIT

            // DATOS DEL EMISOR -> DATOS EN EL JSON A GENERAR
            $table->string('nrc', 8); // NRC -> null, Debera contener el numero de NRC del emisor sin guiones
            $table->string('nombreCliente'); // Nombre del cliente
            $table->string('codActividad'); // Codigo de actividad economica
            $table->string('descActividad'); // Codigo de actividad economica

            // Datos fiscales
            $table->string('nota_remision', 50)->nullable();     // "Nota de     Remisión"
            $table->string('condicion_pago', 100)->nullable();   // "Cond. de Pago" (ej. contado/crédito)

            //RESUMEN DE LA FACTURA -> DATOS EN EL JSON A GENERAR
            $table->decimal('totalNosuj', 10, 2)->default(0);  // Ventas no sujetas
            $table->decimal('totalExenta', 10, 2)->default(0);     // Ventas exentas
            $table->decimal('totalGravada', 10, 2)->default(0);              // Total final
            $table->decimal('descuNoSuj', 10, 2)->default(0);              // Descuentos no sujetos
            $table->decimal('descuExenta', 10, 2)->default(0);              // Descuento Exenta
            $table->decimal('descuGravada', 10, 2)->default(0);              // Descuento Gravada
            $table->decimal('porcentajeDescu', 10, 2)->default(0);              // Porcentaje de descuento
            $table->decimal('totalDescu', 10, 2)->default(0);              // Total de descuento
            $table->decimal('subTotal', 10, 2)->default(0);           // subTotal
            $table->decimal('ivaPerci1', 10, 2)->default(0);
            $table->decimal('ivaRete1', 10, 2)->default(0);
            $table->decimal('reteRenta', 10, 2)->default(0);
            $table->decimal('montoTotalOperacion', 10, 2)->default(0); // Monto total de la operación
            $table->decimal('totalNoGravado', 10, 2)->default(0);
            $table->decimal('totalPagar', 10, 2)->default(0);
            $table->string('totalLetras', 255)->nullable(); // Total en letras
            $table->decimal('saldoFavor', 10, 2)->default(0);
            //EXTENSION DE LA FACTURA -> DATOS AL FINAL DEL JSON A GENERAR
            $table->string('nombEntrega', 255)->nullable(); // Apéndice -> null
            $table->string('docuEntrega', 255)->nullable(); // Apéndice -> null
            $table->string('nombRecibe', 255)->nullable(); // Apéndice -> null
            $table->string('docuRecibe', 255)->nullable(); // Apéndice -> null
            $table->string('observaciones', 255)->nullable(); // Apéndice -> null
            $table->string('apendice', 255)->nullable(); // Apéndice -> null

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
