<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;

    Public function viajero(){

     
        return $this->belongsTo(Viajero::class);
    }

    Public function destinos(){

        return $this->hasMany(Destino::class);
    }

    Public function origenes(){
        return $this->hasMany(Origen::class);
    }

}
