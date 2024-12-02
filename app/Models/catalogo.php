<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class catalogo extends Model
{
    //Relación con Clasificación (Uno a Uno)
     public function clasificacionf()
     {
         return $this->belongsTo(Clasificacion::class, 'tipo', 'id_clasificacion');
     }

      // Relación con Compras (Uno a Muchos)
    public function comprasf()
    {
        return $this->hasMany(Compra::class, 'id_instrumento', 'id_instrumento');
    }

     // Relación con Bodegas (Uno a Muchos)
     public function bodegasf()
     {
         return $this->hasMany(Bodega::class, 'id_instrumento', 'id_instrumento');
     }

}
