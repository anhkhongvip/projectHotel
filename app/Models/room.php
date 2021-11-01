<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;

    public function rooms_type(){
        return $this->belongsTo('App\Models\rooms_type');
    }

    public function order(){
        return $this->hasOne('App\Models\order');
    }

    public function room_image(){
        return $this->hasMany('App\Models\room_image');
    }

}
