<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    use HasFactory;

    public function personal_cargo(){
        return $this->belongsTo(personal_cargo::class);
    }
}
