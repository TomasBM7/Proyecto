<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;

class Proveedores extends Model
{
    use HasFactory;

    public function producto(){
        return $this->belongsTo(Productos::class);
    }

    public function pedido(){
        return $this->belongsTo(pedido::class);
    }
}
