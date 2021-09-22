<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    public function clientes(){
        return $this->hasOne(clientes::class);
    }

    public function servicios(){
        return $this->belongsTo(servicios::class);
    }

    public function factura_servicio(){
        return $this->belongsTo(factura_servicio::class);
    }

    public function factura_multa(){
        return $this->belongsTo(factura_multa::class);
    }

    public function pagos(){
        return $this->hasOne(pagos::class);
    }

    public function pedido(){
        return $this->belongsTo(pedido::class);
    }

    public function personal(){
        return $this->belongsTo(personal::class);
    }
}
