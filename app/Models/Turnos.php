<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personal_turno;

class Turnos extends Model
{
    use HasFactory;

    public function personal_turno(){
        return $this->belongsTo(personal_turno::class);
    }
}
