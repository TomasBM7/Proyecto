<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura_multa;
use App\Models\Cliente;

class Multa extends Model
{
    use HasFactory;
    public function factura_multa(){
        return $this->belongsTo(factura_multa::class);
    }
    public function cliente(){
         return $this->belongsTo(Cliente::class);
    }

}
