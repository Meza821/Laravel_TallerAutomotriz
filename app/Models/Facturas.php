<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Factura_Detalles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Facturas_Json;
use App\Models\Clientes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Facturas extends Model
{

      use HasFactory;

    protected $fillable = [
        'fecha',
        'cliente_id',
        'estado',
        'clasificacionMsg',
        'codigoMsg',
        'descripcionMsg',
        'fechaProcesamiento',
        'version',
        'ambiente',
        'tipoDte',
        'numeroControl',
        'codigoGeneracion',
        'tipoModelo',
        'tipOperacion',
        'tipoContingencia',
        'motivoContin',
        'tipoTransmision',
        'selloRecibido',
        'fechaGeneracion',
        'horaGeneracion',
        'tipoMoneda',
        'numDocumento',
        'nrc',
        'nombreCliente',
        'codActividad',
        'descActividad',
        'nota_remision',
        'condicion_pago',
        'totalNosuj',
        'totalExenta',
        'totalGravada',
        'descuNoSuj',
        'descuExenta',
        'descuGravada',
        'porcentajeDescu',
        'totalDescu',
        'subTotal',
        'ivaPerc1',
        'ivaRete1',
        'reteRenta',
        'montoTotalOperacion',
        'totalNoGravado',
        'totalPagar',
        'totalLetras',
        'saldoFavor',
        'nombEntrega',
        'docuEntrega',
        'nombRecibe',
        'docuRecibe',
        'observaciones',
        'apendice',
    ];

     protected $casts = [
        'fecha' => 'date',
        'fechaProcesamiento' => 'date',
        'fechaGeneracion' => 'date',
        'totalNosuj' => 'decimal:2',
        'totalExenta' => 'decimal:2',
        'totalGravada' => 'decimal:2',
        'descuNoSuj' => 'decimal:2',
        'descuExenta' => 'decimal:2',
        'descuGravada' => 'decimal:2',
        'porcentajeDescu' => 'decimal:2',
        'totalDescu' => 'decimal:2',
        'subTotal' => 'decimal:2',
        'ivaPerc1' => 'decimal:2',
        'ivaRete1' => 'decimal:2',
        'reteRenta' => 'decimal:2',
        'montoTotalOperacion' => 'decimal:2',
        'totalNoGravado' => 'decimal:2',
        'totalPagar' => 'decimal:2',
        'saldoFavor' => 'decimal:2',
    ];
    public function cliente()
    {
        return $this->belongsTo(Clientes::class);
    }

    public function detalles()
    {
        return $this->hasMany(Factura_Detalles::class);
    }

    public function json()
    {
        return $this->hasOne(Facturas_Json::class, 'idFactura');
    }

}
