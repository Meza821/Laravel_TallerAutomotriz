<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emisor extends Model
{
    protected $table = 'emisor';
    protected $fillable = [
        'nit',
        'nrc',
        'nombre',
        'nombre_comercial',
        'actividad_economica',
        'departamento',
        'municipio',
        'direccion'
    ];

}
