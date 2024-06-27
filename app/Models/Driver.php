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
        'email',   
        'phone',     
        'nin',       
        'state', 
        'address',    
        'lga' 
    ];
}
