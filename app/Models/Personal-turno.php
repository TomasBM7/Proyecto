<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personal;
use App\Models\turnos;

class Personal_turno extends Model
{
    use HasFactory;

    public function personal(){
        return $this->belongsTo(personal::class);
    }

    public function turnos(){
        return $this->belongsTo(turnos::class);
    }
}
