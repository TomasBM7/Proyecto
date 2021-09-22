<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Factura;

class Pagos extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->hasOne(cliente::class);
    }

    public function factura(){
        return $this->hasOne(factura::class);
    }
}
