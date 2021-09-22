<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personal_cargo;

class Cargos extends Model
{
    use HasFactory;

    public function personal_cargo(){
        return $this->belongsTo(personal_cargo::class);
    }
    
}
