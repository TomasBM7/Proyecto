<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_servicio extends Model
{
    use HasFactory;

    public function servicios(){
        return $this->belongsTo(servicios::class);
    }

    public function factura(){
        return $this->belongsTo(factura::class);
    }
}
