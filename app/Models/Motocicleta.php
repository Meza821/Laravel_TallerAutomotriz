<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motocicleta extends Model
{
    protected $fillable = [
        'cliente_id',
        'marca',
        'modelo',
        'cc',
        'color',
        'placa',
        'anio',
        'observaciones'
    ];

    public function getMotocicletas()
    {
        return $this->all();
    }
    public function getMotocicletaById($id)
    {
        return $this->find($id);
    }
    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }
}
