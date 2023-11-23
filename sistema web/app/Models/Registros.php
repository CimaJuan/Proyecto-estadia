<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    public function estado(){

        return $this->belongsTo(estado::class, 'estado_id', 'id');
    }

    public function marca(){

        return $this->belongsTo(marca::class, 'marca_id', 'id');
    }

    public function aplica(){

        return $this->belongsTo(aplica::class, 'aplica_id', 'id');
    }

    public function identificacion(){

        return $this->belongsTo(Identificacion::class, 'identificacion_id', 'id');
    }
}
