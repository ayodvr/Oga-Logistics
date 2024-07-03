<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
        'order_id',
        'driver_id',
        'assigned',
        'accepted',
        'picked_up',    
        'delivered',
        'declined',
        'acct_name',
        'acct_number', 
        'bank_name',
    ];

        // public function users(): HasMany
        // {
        //     return $this->hasMany(User::class);
        // }

}
