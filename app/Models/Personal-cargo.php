<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personal;
use App\Models\cargos;

class Personal_cargo extends Model
{
    use HasFactory;

    public function personal(){
        return $this->belongsTo(personal::class);
    }
    
    public function cargos(){
        return $this->belongsTo(cargos::class);
    }
}
