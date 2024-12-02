<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bodega extends Model
{
    //Relación con Catalogo (Muchos a Uno)
    public function catalogof()
    {
        return $this->belongsTo(Catalogo::class, 'id_instrumento', 'id_instrumento');
    }

}
