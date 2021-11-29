<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personal;

class Cargo extends Model
{
    use HasFactory;

    public function personal(){
        return $this->belongsTo(Personal::class);
    }
    
}