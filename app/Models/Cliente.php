<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vivienda;
use App\Models\Mascotas;
use App\Models\Estado_civil;

class Cliente extends Model
{
    use HasFactory;

    public function vivienda(){
        return $this->hasOne(Vivienda::class);
    }

    public function mascotas(){
        return $this->belongsTo(Mascotas::class);
    }

    public function estado_civil(){
        return $this->hasOne(Estado_civil::class);
    }

    public function servicios(){
        return $this->belongsTo(servicios::class);
    }

    public function factura(){
        return $this->belongsTo(factura::class);
    }

    public function pagos(){
        return $this->belongsTo(pagos::class);
    }
}



