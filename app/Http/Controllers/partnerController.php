<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class partnerController extends Controller
{
    public function partnerdash()
    {
            return view('partner.dash');
    }

    public function orderhistory()
    {
            return view('partner.orderhistory');
    }

    public function trackorder()
    {
            return view('partner.trackorder');
    }

}
