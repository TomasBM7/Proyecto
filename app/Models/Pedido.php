<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function factura(){
        return $this->belongsTo(factura::class);
    }

    public function personal(){
        return $this->belongsTo(personal::class);
    }

    public function proveedores(){
        return $this->belongsTo(Proveedores::class);
    }

    public function productos(){
        return $this->belongsTo(Productos::class);
    }
}
