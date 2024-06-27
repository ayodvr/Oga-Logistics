<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    Protected $fillable = [
        'name',     
        'last_name', 
        'email',   
        'phone',     
        'bname', 
        'address', 
        'cac',     
        'state',     
        'lga' 
    ];
}
