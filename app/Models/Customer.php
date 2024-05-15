<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    Protected $fillable = [
        'origin',
        'destination',  
        'trip_distance',  
        'trip_time',      
        'trip_cost',     
        'user_id',
        'hashed',
        'tracking',
        'order_id'      
    ];


    public function customer(){

        return $this->hasOne('App/Models/Driver');
     }
}
