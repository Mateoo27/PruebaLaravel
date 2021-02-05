<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function configs () {
        return $this->hasOne('App\Config')->withTimestamps();
    }

    public function rols(){
        return $this-> belongsTo(Rol::class);
    }
}
