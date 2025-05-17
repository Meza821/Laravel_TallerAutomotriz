<?php

namespace App\Http\Controllers;

use App\Models\Facturas;
use Illuminate\Http\Request;

class FacturaController extends Controller
{

    //INSERT JSON A LA BD

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo_persona' => 'required|string|max:50',
            'direccion' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'numero_registro' => 'required|string|max:255',
            'nit' => 'required|string|max:255',
            'dui' => 'required|string|max:10',
            'giro' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $factura = Facturas::create($validated);
    }


    //GENERAR JSON
    public function generarJsonFactura($facturaId){
        $factura = Facturas::with('detalles')->findOrFail($facturaId);

        //Calcular totales
        $totalGravada = $factura->detalles->sum(fn($d) => $d->precio_unitario * $d->cantidad);
        $iva = round($totalGravada * 0.13, 2);
        $totalPagar = $totalGravada + $iva;

        //Receptor simplificando por si es consumidor final
        $receptor = [
            "TipoDocumento" => "36",
            "NumeroDocumento" => "NA",
            "Nombre" => "Consumidor Final"
        ];
        if($factura->cliente_nit && $totalPagar >= 25000) {
            $receptor = [
                "TipoDocumento" => "13",
                "NumeroDocumento" => $factura->cliente_nit,
                "Nombre" => $factura->cliente_nombre
            ];
        }

        $json = [
                    "Identificación" => [
                        "Version" => "1",
                        "Ambiente" => "00", //Pruebas 00, Producción 01
                        "TipoDte" => "01",
                        "NumeroControl" => $factura->numero_control,
                        "CodigoGeneracion" => Str::uuid()->toString(),
                        "TipoModelo" => "1", //Factura
                        "TipoOperacion" => "1", //Factura
                        "FechaHoraGeneracion" => Carbon::now()->toIso8601String(),
                        "TipoMoneda" => "USD"
                    ],
                    "Emisor" => [
                        "Nit" => "05204556-9",
                        "Nrc" => "325773-6",
                        "Nombre" => "CÓRDOVA ANAYA CRISTIAN JOSUE",
                        "NombreComercial" => "Roots Bikers",
                        "Telefono" => "0000-0000",
                        "Correo" => "meza96hw@gmail.com",
                        "ActividadEconomica" => "452000",
                        "Departamento" => "04",
                        "Municipio" => "08",
                        "Direccion" => "4ª AV. NORTE POLIG. SDA. LUCERNA, RES. VILLAS DE SUIZA #14, SANTA TECLA, LA LIBERTAD"


                    ],
                    "Receptor" => $receptor,
                    "CuerpoDocumento" => $factura->detalles->map(function($detalle) {
                        return [
                            "NumItem" => $i + 1,
                            "TipoItem" => "S",
                            "Descripcion" => $item->descripcion,
                            "Cantidad" => $item->cantidad,
                            "UnidadMedida" => "UNI",
                            "PrecioUnitario" => $item->precio_unitario,
                            "MontoDescuento" => 0,
                            "VentaGravada" => round($item->precio_unitario * $item->cantidad, 2)
                        ];
                    })->toArray(),
                    "Resumen" => [
                    "TotalNoSuj" => 0.00,
                        "TotalExenta" => 0.00,
                        "TotalGravada" => $totalGravada,
                        "SubTotalVentas" => $totalGravada,
                        "DescuNoSuj" => 0.00,
                        "DescuExenta" => 0.00,
                        "DescuGravada" => 0.00,
                        "PorcentajeDescuento" => 0,
                        "TotalDescu" => 0.00,
                        "TotalIva" => $iva,
                        "SubTotal" => $totalGravada,
                        "IvaRete1" => 0.00,
                        "ReteRenta" => 0.00,
                        "SumaOtrosImp" => 0.00,
                        "TotalPagar" => $totalPagar
                        ],
                        "Extensiones" => [
                            "NombreDocumento" => "Factura Taller Electronica",
                            "Observaciones" => "Gracias por su preferencia"

                        ]

                    ];
        return response()->json($json);

    }
}
