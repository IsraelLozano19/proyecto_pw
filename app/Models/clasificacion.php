<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clasificacion extends Model
{
    //
    public function catalogof()
    {
        return $this->hasOne(Catalogo::class, 'tipo', 'id_clasificacion');
    }

}
