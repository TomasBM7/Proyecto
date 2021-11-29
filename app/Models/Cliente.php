<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estado;
use App\Models\Despensa;
use App\Models\Servicios;
use App\Models\Factura;
use App\Models\Multa;

class Cliente extends Model
{
    use HasFactory;

    public function estado(){
        return $this->hasOne(Estado::class);
    }

    public function despensa(){
        return $this->hasOne(Despensa::class);
    }

    public function servicios(){
        return $this->belongsTo(Servicios::class);
    }

    public function factura(){
        return $this->belongsTo(Factura::class);
    }

    public function multa(){
        return $this->belongsTo(Multa::class);
    }

}



