<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    public function compraS(){
        return $this->belongsToMany(compras::class)
        ->withTimestamps()
        ->withPivot('cantidad','precio_compra','precio_venta');
    }

    public function ventas(){
        return $this->belongsToMany(venta::class)->withTimestamps()
        ->withPivot('cantidad','precio_venta','descuento');
    }
    public function  categorias(){
        return $this->belongsToMany(categoria::class)->withTimestamps();
    }

    public function marca(){
        return $this->belongsTo(marca::class);
    }

    public function presentacione(){
        return $this->belongsTo(presentacione::class);
    }
}
