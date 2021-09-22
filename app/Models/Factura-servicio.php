<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Servicios;
use App\Models\Factura;

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
