<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura_Detalles;

class Service extends Model
{
    use HasFactory;

    //Nombre de la tabla

    protected $table = 'services';

    //Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
    ];

     public function detallesFactura()
    {
        return $this->hasMany(Factura_Detalles::class, 'idServicio');
    }
}
