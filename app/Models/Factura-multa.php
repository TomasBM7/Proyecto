<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura;
use App\Models\Multas;

class Factura_multa extends Model
{
    use HasFactory;

    public function factura(){
        return $this->belongsTo(factura::class);
    }

    public function multas(){
        return $this->belongsTo(multas::class);
    }

}
