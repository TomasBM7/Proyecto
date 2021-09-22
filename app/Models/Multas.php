<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multas extends Model
{
    use HasFactory;

    public function factura_multa(){
        return $this->belongsTo(factura_multa::class);
    }
}
