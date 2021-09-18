<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Mascotas extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->hasOne(Cliente::class);
    }

}
