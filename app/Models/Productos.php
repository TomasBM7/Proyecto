<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proveedores;
use App\Models\pedido;

class Productos extends Model
{
    use HasFactory;

    public function proveedores(){
        return $this->belongsTo(Proveedores::class);
    }

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

}
