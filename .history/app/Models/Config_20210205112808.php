<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    public function user2s () {
        return $this->hasOne('App\User')->withTimestamps();
    }
}
