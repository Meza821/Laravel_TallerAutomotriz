<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Facturas;
use App\Models\Service;

class Facturas_Json extends Model
{
  use HasFactory;

    protected $table = 'facturas_json';

    protected $fillable = [
        'idFactura',
        'ls_send',
        'json',
    ];

    protected $casts = [
        'json' => 'array',
    ];

    public function factura()
    {
        return $this->belongsTo(Facturas::class, 'idFactura');
    }
}
