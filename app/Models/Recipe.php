<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }

    public function kitchen(){
        return $this->hasOne(Kitchen::class);
    }
}
