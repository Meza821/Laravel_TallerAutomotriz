<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }


}
