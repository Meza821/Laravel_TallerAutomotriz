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
                    'version' => '3',
                    'ambiente' => '00',
                    'tipoDte' => '03',
                    'numeroControl' => '',
                    'codigoGeneracion' => $codigoGeneracion,
                    'tipoModelo' => '1',
                    'tipoOperacion' => '1',
                    'tipoContingencia' => null,
                    'motivoContin' => null,
                    'fecEmi' => $factura->fechaGeneracion,
                    'horEmi' => $factura->horaGeneracion,
                    'tipoMoneda' => 'USD'
                ],
                'documentoRelacionado' => null,
                'emisor' => [
                    'nit' => '0614-XXXXXX-101-1',
                    'nrc' => 'XXXXX',
                    'nombre' => 'Taller de Motos El Salvador',
                    'codActividad' => '123456',
                    'descActividad' => 'Taller de Motos',
                    'nombreComercial' => 'Taller de Motos',
                    'tipoEstablecimiento' => '01',
                    'direccion' => [
                        'departamento' => '06',
                        'municipio' => '14',
                        'complemento' => ''
                    ],
                    'telefono' => '2222-3333',
                    'correo' => '',
                    'codEstable' => null,
                    'codPuntoVenta' => null,
                    'codEstableMH' => null,
                    'codPuntoVentaMH' => null
                ],
                'receptor' => [
                    'nrc' => $cliente->nrc,
                    'nombre' => $cliente->nombre,
                    'direccion' => [
                        'municipio' => $cliente->municipio,
                        'departamento' => $cliente->departamento,
                        'complemento' => ''
                    ],
                    'telefono' => $cliente->telefono,
                    'correo' => $cliente->email,
                    'nombreComercial' => $cliente->nombre,
                    'nit' => $cliente->nit,
                ],
                'cuerpoDocumento' => [
                    [
                        'numItem' => 1,
                        'tipoItem' => 2,
                        'cantidad' => $cantidad,
                        'codigo' => '',
                        'descripcion' => '',
                        'precioUni' => $precio,
                        'montoDesc' => 0,
                        'codTributo' => null,
                        'ventaNoSuj' => 0,
                        'ventaExenta' => 0,
                        'ventaGravada' => $subtotal,
                        'tributos' => ['20'],
                        'psv' => 0.00,
                        'noGravado' => 0.00
                    ]
                ],
                'resumen' => [
                    'totalNoSuj' => 0,
                    'totalExenta' => 0,
                    'totalGravada' => $subtotal,
                    'subTotalVentas' => $subtotal,
                    'descNoSuj' => 0,
                    'descuExenta' => 0,
                    'descuGravada' => 0,
                    'porcentajeDescuento' => 0,
                    'totalDescu' => 0,
                    'tributos' => [
                        [
                            'codigo' => '20',
                            'descripcion' => 'IVA',
                            'valor' => $iva
                        ]
                    ],
                    'subTotal' => $subtotal,
                    'ivaPerci1' => $iva,
                    'ivaRete1' => 0,
                    'reteRenta' => 0,
                    'montoTotalOperacion' => $subtotal,
                    'totalNoGravado' => 0,
                    'totalPagar' => $subtotal + $iva,
                    'totalLetras' => '', // puedes usar un helper para convertirlo a letras
                    'saldoFavor' => 0,
                    'condicionOperacion' => '1',
                    'pagos' => null,
                    'numPagoElectronico' => null
                ],
                'extension' => [
                    'nombEntrega' => '',
                    'docuEntrega' => '',
                    'nombRecibe' => '',
                    'docuRecibe' => '',
                    'placaVehiculo' => '',
                    'observaciones' => ''
                ],
                'apendice' => null
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
