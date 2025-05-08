<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    // public function getClientes()
    // {
    //     return $this->all();
    // }

    // public function getClienteById($id)
    // {
    //     return $this->find($id);

    // }

    // public function facturas()
    // {
    //     return $this->hasMany(Facturas::class, 'cliente_id');
    // }

    // public function motocicletas()
    // {
    //     return $this->hasMany(Motocicleta::class, 'cliente_id');
    // }

}
