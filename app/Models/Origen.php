<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    use HasFactory;
  // un origen asociado a un viaje 
    public function viaje(){
        // retorna la relación inversa belongsTo de viaje 
        return $this->belongsTo(Viaje::class);
    }


} 
