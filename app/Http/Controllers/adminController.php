<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admindashboard()
    {
        
            return view('admin.dash');
       
    }

    public function managedriver()
    {
        
            return view('admin.managedriver');
       
    }

    public function driverreg()
    {
        
            return view('admin.driverreg');
       
    }

    public function managepartners()
    {
        
            return view('admin.managepartners');
       
    }

    public function partnersreg()
    {
        
            return view('admin.partnersreg');
       
    }


    public function alldriver()
    {
        
            return view('admin.alldriver');
       
    }

    public function allpartner()
    {
        
            return view('admin.allpartner');
       
    }

    public function manageadminuser()
    {
        
            return view('admin.manageadminuser');
       
    }

    public function adminuserreg()
    {
        
            return view('admin.adminuserreg');
       
    }

    public function alladminuser()
    {
        
            return view('admin.alladminuser');
       
    }

    public function alluser()
    {
        
            return view('admin.alluser');
       
    }

    public function orderallocation()
    {
        
            return view('admin.orderallocation');
       
    }

}
