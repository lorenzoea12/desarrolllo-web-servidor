<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compania extends Model
{
    use HasFactory;


    public function videojuegos(){
        return $this -> hasMany(Videojuego::class);
    }
}
