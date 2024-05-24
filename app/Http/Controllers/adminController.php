<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;

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
        $user = User::whereHasRole(['driver', 'partners', 'customer'])->get();
        // dd($user);
        return view('admin.alluser')->with('user', $user);
       
    }

    public function orderallocation()
    {
        $estimate = Customer::all();
        $driver = User::whereHasRole(['driver'])->get();
        $driver_idm = $driver[0]['id'];
        return view('admin.orderallocation')->with('estimate', $estimate)
                                            ->with('driver', $driver)
                                            ->with('driver_idm', $driver_idm);;
    }

    public function allocatedRide(Request $request, $order, $id)
    {
        if($request->state == "Select Rider"){
            return back();
        }else{

        $allocate = Customer::where('order_id', $order)->get();
        $driver_name = User::where('id', $request->state)->get();

        $data = [
                'origin'             => $allocate[0]['origin'],
                'destination'        => $allocate[0]['destination'],
                'trip_distance'      => $allocate[0]['trip_distance'],
                'trip_time'          => $allocate[0]['trip_time'],
                'trip_cost'          => $allocate[0]['trip_cost'],
                'user_id'            => $allocate[0]['user_id'],
                'hashed'             => $allocate[0]['hashed'],
                'tracking'           => $allocate[0]['tracking'],
                'order_id'           => $allocate[0]['order_id'],
                'driver_id'          => $request->state,
                'assigned'           => $driver_name[0]['name'] ." ". $driver_name[0]['last_name']
        ];

        // dd($data);
        
        $customer = Customer::find($id);

        $customer->update($data);

        return back();
        }
    }

}
