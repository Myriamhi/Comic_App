<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartoonist extends Model
{
    public function characters(){
        return $this->hasMany(Character::class);
    }
}
