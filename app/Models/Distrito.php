<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Departamento;
use App\Models\Clientes;

class Distrito extends Model
{
    protected $fillable = [
        'nombre_distrito',
        'codigo_municipio',
        'nombre_municipio_oficial',
        'departamento_id',
    ];


    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function clientes()
    {
        return $this->hasMany(Clientes::class);
    }
}
