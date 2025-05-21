<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Facturas;
use App\Models\Service;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Factura_Detalles extends Model
{
   use HasFactory;

    protected $table = 'factura_detalles';

    protected $fillable = [
        'idFactura',
        'idProducto',
        'cantidad',
        'descripcion',
        'precio_unitario',
        'venta_exenta',
        'venta_gravada',
        'total',
    ];

    protected $casts = [
        'cantidad' => 'decimal:2',
        'precio_unitario' => 'decimal:2',
        'venta_exenta' => 'decimal:2',
        'venta_gravada' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function factura()
    {
        return $this->belongsTo(Facturas::class, 'idFactura');
    }

    public function producto()
    {
        return $this->belongsTo(Service::class, 'idProducto'); // Asumiendo que idProducto apunta a la tabla servicios
    }

}
