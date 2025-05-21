<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Departamento;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Distrito;

class Clientes extends Model

{
    use HasFactory;

    //Nombre de la tabla

    protected $table = 'clientes';
    protected $fillable = [
        'nombre',
        'tipo_persona',
        'direccion',
        'municipio',
        'departamento',
        'numero_registro',
        'nit',
        'dui',
        'giro',
        'condicion_pago',
        'telefono',
        'email',
    ];
            public function distrito()
        {
            return $this->belongsTo(Distrito::class, 'municipio', 'codigo_municipio');
        }


}
