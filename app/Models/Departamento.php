<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'nombre',
    ];
    public function distritos()
    {
      return $this->hasMany(Distrito::class, 'cod_departamento', 'codigo');;
    }


}
