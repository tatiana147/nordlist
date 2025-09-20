<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;

    public function Documento(){
        return $this->belongsTo(Documento::class);
   
    }
    
    public function proveedore(){
        return $this->hasOne(proveedore::class);
   
    }

    public function cliente(){
        return $this->hasOne(clientes::class);
    }
}

