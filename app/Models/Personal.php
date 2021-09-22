<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\factura;
use App\Models\pedido;
use App\Models\Personal_cargo;
use App\Models\personal_turno;

class Personal extends Model
{
    use HasFactory;

    public function factura(){
        return $this->belongsTo(factura::class);
    }

    public function pedido(){
        return $this->belongsTo(pedido::class);
    }

    public function personal_cargo(){
        return $this->belongsTo(personal_cargo::class);
    }

    public function personal_turno(){
        return $this->belongsTo(personal_turno::class);
    }
}
