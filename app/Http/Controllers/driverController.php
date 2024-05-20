<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class driverController extends Controller
{
    public function driverdash()
    {
        
            return view('driver.dash');
       
    }

    public function task()
    {
        
            return view('driver.task');
       
    }

    public function statement()
    {
        
            return view('driver.statement');
       
    }

}
