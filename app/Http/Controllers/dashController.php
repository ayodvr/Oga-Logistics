<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\User;
use App\Models\Estimate;
use Auth;


use Illuminate\Http\Request;

class dashController extends Controller
{
    
    public function dashboard()
    {
        if(auth()->User()->hasRole('admin'))
        {
            return view('admin.dash');

        }else if(auth()->User()->hasRole('driver'))
        {
            return view('driver.dash');

        }else if(auth()->User()->hasRole('partners'))
        {
            return view('partner.dash');
        }
        // return view('customer.dash');
        return view('JointDashboard.dash');
    }

    public function trackorder()
    {
        return view('customer.trackorder');
    }

    public function orderhistory()
    {
        $user = auth()->user()->id;
        $orders = Customer::where('user_id', $user)->get();
        return view('customer.orderhistory')->with('orders', $orders);
    }

}
