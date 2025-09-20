<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use hasfactory;

    public function productos(){
       return $this->belongsToMany(producto::class)->withTimestamps(); 
    }

    public function caracteristica(){
        return $this->belongsTo(caracteristica::class);
    }

}
