<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura_Detalles extends Model
{
    protected $fillable = [
       'factura_id', 'cantidad', 'descripcion', 'precio_unitario', 'venta_exenta', 'venta_gravada'
    ];

    public function factura()
    {
        return $this->belongsTo(Facturas::class, 'factura_id');
    }

}
