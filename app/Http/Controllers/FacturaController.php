<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Facturas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Factura_Detalles;
use App\Models\Service;
use App\Models\Facturas_Json;

class FacturaController extends Controller
{

    //INSERT JSON A LA BD

    public function storeFactura(Request $request)
    {
        DB::beginTransaction();
        try {
            // Datos generales
            $cliente = Clientes::findOrFail($request->cliente_id);
            $fecha = now();
            $codigoGeneracion = Str::uuid();

            // Paso 1: Crear factura
            $factura = Facturas::create([
                'cliente_id' => $cliente->id,
                'fecha' => $fecha,
                'estado' => 'PENDIENTE',
                'codigoGeneracion' => $codigoGeneracion,
                'fechaGeneracion' => $fecha->format('Y-m-d'),
                'horaGeneracion' => $fecha->format('H:i:s'),
                'tipoMoneda' => 'USD',
                'tipoDte' => '01', // Factura electrónica
                'ambiente' => 2, // 1=Producción, 2=Pruebas
                'tipoModelo' => 1, // Normal
                'tipOperacion' => 1,
                'tipoContingencia' => null,
                'motivoContin' => null,
                'tipoTransmision' => 1,
                'totalGravada' => 0,
                'subTotal' => 0,
                'totalPagar' => 0,
            ]);

            $total = 0;
            $subtotal = 0;
            $iva = 0;

            // Paso 2: Insertar detalles
            foreach ($request->servicios as $serv) {
                $servicio = Service::findOrFail($serv['id']);
                $cantidad = $serv['cantidad'];
                $precio = $servicio->precio;
                $lineaTotal = $cantidad * $precio;
                $ivaLinea = $lineaTotal * 0.13;

                Factura_Detalles::create([
                    'idFactura' => $factura->id,
                    'idProducto' => $servicio->id,
                    'cantidad' => $cantidad,
                    'descripcion' => $servicio->nombre,
                    'precio_unitario' => $precio,
                    'venta_gravada' => $lineaTotal,
                    'total' => $lineaTotal + $ivaLinea
                ]);

                $subtotal += $lineaTotal;
                $iva += $ivaLinea;
                $total += $lineaTotal + $ivaLinea;
            }

            // Actualizar totales en factura
            $factura->update([
                'subTotal' => round($subtotal, 2),
                'totalGravada' => round($subtotal, 2),
                'montoTotalOperacion' => round($subtotal, 2),
                'totalPagar' => round($total, 2),
                'ivaPerci1' => round($iva, 2),
            ]);

            // Paso 3: Generar JSON
            $jsonData = [
                'identificacion' => [
                    'codigoGeneracion' => $codigoGeneracion,
                    'tipoModelo' => '1',
                    'tipOperacion' => '1',
                    'tipoContingencia' => null,
                    'motivoContin' => null,
                    'tipoTransmision' => '1',
                    'tipoDte' => '01',
                    'numeroControl' => '',
                    'fechaEmision' => $factura->fechaGeneracion . 'T' . $factura->horaGeneracion,
                    'ambiente' => '02'
                ],
                'emisor' => [
                    'nombre' => 'Taller de Motos El Salvador',
                    'nit' => '0614-XXXXXX-101-1',
                    'nrc' => 'XXXXX',
                    'direccion' => 'San Salvador',
                    'telefono' => '2222-3333',
                ],
                'receptor' => [
                    'nombre' => $cliente->nombre,
                    'direccion' => $cliente->direccion,
                    'municipio' => $cliente->municipio,
                    'departamento' => $cliente->departamento,
                    'nit' => $cliente->nit,
                    'dui' => $cliente->dui,
                    'condicion_pago' => $cliente->condicion_pago,
                    'telefono' => $cliente->telefono,
                    'email' => $cliente->email,
                ],
                'detalle' => [],
                'resumen' => [
                    'subTotalVentas' => round($subtotal, 2),
                    'iva' => round($iva, 2),
                    'totalPagar' => round($total, 2),
                ]
            ];

            $detalles = Factura_Detalles::where('idFactura', $factura->id)->get();
            foreach ($detalles as $d) {
                $jsonData['detalle'][] = [
                    'cantidad' => $d->cantidad,
                    'descripcion' => $d->descripcion,
                    'precio_unitario' => $d->precio_unitario,
                    'venta_gravada' => $d->venta_gravada,
                    'total' => $d->total,
                ];
            }

            // Paso 4: Guardar en facturas_json
            Facturas_Json::create([
                'idFactura' => $factura->id,
                'json' => json_encode($jsonData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT),
            ]);

            DB::commit();
            return response()->json(['success' => true, 'mensaje' => 'Factura creada y JSON generado.']);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
