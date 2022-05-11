<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    //Relación de 1 a muchos
    public function tournament(){
        return $this->hasMany(tournament::class);
    }

}
