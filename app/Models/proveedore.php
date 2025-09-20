<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedore extends Model
{
    use HasFactory;

    public function persona(){
        return $this->belongsTo(persona::class);
    }

    public function compras(){
        return $this->hasMany(compras::class);
    }
    
}
