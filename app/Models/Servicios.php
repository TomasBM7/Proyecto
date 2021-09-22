<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cliente;
use App\Models\factura;

class Servicios extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->belongsTo(Vcliente::class);
    }

    public function factura(){
        return $this->belongsTo(factura::class);
    }
}
