<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class partnerController extends Controller
{
    public function partnerdash()
    {
            return view('partner.dash');
    }
}
