<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    public function order_service(){
        return $this->hasOne('App\Models\order_service');
    }
}
