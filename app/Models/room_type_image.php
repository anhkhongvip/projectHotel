<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room_type_image extends Model
{
    use HasFactory;

    public function rooms_type(){
        return $this->belongsTo('App\Models\rooms_type');
    }
}
