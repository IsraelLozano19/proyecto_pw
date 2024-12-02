<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    //Relación con Catalogo (Muchos a Uno)
    public function catalogof()
    {
        return $this->belongsTo(Catalogo::class, 'id_instrumento', 'id_instrumento');
    }

    // Relación con User (Muchos a Uno)
    public function userf()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

}
