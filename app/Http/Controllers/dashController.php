<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\User;
use App\Models\Estimate;
use DB;
use Auth;


use Illuminate\Http\Request;

class dashController extends Controller
{
    
    public function dashboard()
    {
        if(auth()->User()->hasRole('admin'))
        {
            $estimate  = Customer::orderBy('created_at', 'desc')->get();
            $accepted  = DB::table('customers')->count('accepted');
            $picked_up = DB::table('customers')->count('picked_up');
            $delivered = DB::table('customers')->count('delivered');
            $sales     = DB::table('customers')->sum('trip_cost');
            $driver    = User::orderBy('created_at', 'desc')->whereHasRole(['driver'])->get();
            // $driver_idm = $driver[0]['id'];
            $all_orders = count($estimate);
            return view('admin.dash')->with('estimate', $estimate)
                                     ->with('driver', $driver)
                                    //  ->with('driver_idm', $driver_idm)
                                     ->with('accepted', $accepted)
                                     ->with('picked_up', $picked_up)
                                     ->with('delivered', $delivered)
                                     ->with('all_orders', $all_orders)
                                     ->with('sales', $sales);

        }else if(auth()->User()->hasRole('driver'))
        {
            $count = null;
            $allocated = Customer::where('driver_id', auth()->user()->id)->get();
            foreach($allocated as $key => $value){
                if($value['accepted'] == null){
                    $count++;
                }
            }
            $accepted  = DB::table('customers')->where('driver_id', auth()->user()->id)->count();
            $delivered  = DB::table('customers')->where('driver_id', auth()->user()->id)->count('delivered');
            $assigned  = DB::table('customers')->where('driver_id', auth()->user()->id)->count('assigned');
            $picked_up  = DB::table('customers')->where('driver_id', auth()->user()->id)->count('picked_up');
            return view('driver.dash')->with('allocated', $allocated)
                                      ->with('accepted', $accepted)
                                      ->with('assigned', $assigned)
                                      ->with('picked_up', $picked_up)
                                      ->with('delivered', $delivered)
                                      ->with('count', $count);

        }else if(auth()->User()->hasRole('partners'))
        {
            return view('partner.dash');
        }
        // return view('customer.dash');
        return view('JointDashboard.homescreen');
    }

    public function trackorder($id)
    {
        $tracker = Customer::findorfail($id);
        return view('customer.trackorder')->with('tracker', $tracker);
    }

    public function orderhistory()
    {
        $user = auth()->user()->id;
        $orders = Customer::where('user_id', $user)->get();
        return view('customer.orderhistory')->with('orders', $orders);
    }

    public function arrivalproblem()
    {
        return view('customer.arrivalproblem');
    }

    public function payproblem()
    {
        return view('customer.payproblem');
    }

    public function driverproblem()
    {
        return view('customer.driverproblem');
    }

    public function support()
    {
        return view('customer.support');
    }

    public function account()
    {
        return view('mobilelayouts.account');
    }

}
