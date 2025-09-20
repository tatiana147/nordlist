<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    USE HasFactory;
    
    public function persona(){
        return $this->belongsTo(persona::class);
    }

    public function ventas(){
        return $this->hasMany(venta::class);
    }
}

