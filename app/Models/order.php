<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo('App\Models\customer', 'customer_id', 'id');
    }

    public function room(){
        return $this->belongsTo('App\Models\room', 'room_id');
    }
}
