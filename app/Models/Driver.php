<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    Protected $fillable = [
        'name',     
        'last_name', 
        'user_id',
        'email',   
        'phone',     
        'nin',       
        'state', 
        'address',    
        'lga' 
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
