<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms_type extends Model
{
    use HasFactory;

    public function rooms(){
        return $this->hasMany('App\Models\room');
    }

    public function room_type_image(){
        return $this->hasMany('App\Models\room_type_image');
    }
}
