<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Estimate;

class driverController extends Controller
{
    public function driverdash()
    {
        
            return view('driver.dash');
       
    }

    public function task()
    {
        $allocated = Customer::where('driver_id', auth()->user()->id)->get();
        //dd($allocated);
        return view('driver.task')->with('allocated', $allocated);
       
    }

    public function acceptOrder($id){
        Customer::find($id)->update(['accepted'=> 1]);
        return back();
    }

    public function pickedUp($id){
        Customer::find($id)->update(['accepted'=> 2]);
        Customer::find($id)->update(['picked_up'=> 1]);
        return back();
    }

    public function delivered($id){
        Customer::find($id)->update(['accepted'=> 3]);
        Customer::find($id)->update(['delivered'=> 1]);
        return back();
    }


    public function statement()
    {
        
            return view('driver.statement');
       
    }

}
