<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{

    protected $fillable = [
        'fecha',
        'cliente_id',
        'nota_remision',
        'condicion_pago',
        'sumas',
        'iva',
        'subtotal',
        'iva_retenido',
        'ventas_no_sujetas',
        'ventas_exentas',
        'total'
    ];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');

    }

    public function detalles()
    {
        return $this->hasMany(Factura_Detalles::class, 'factura_id');
    }
}
