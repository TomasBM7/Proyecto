<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura;
use App\Models\Pedido;
use App\Models\Cargo;
use App\Models\Turno;

class Personal extends Model
{
    use HasFactory;

    public function factura(){
        return $this->belongsTo(Factura::class);
    }

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

    public function cargo(){
        return $this->hasOne(Cargo::class);
    }

    public function turno(){
        return $this->hasOne(Turno::class);
    }
}
