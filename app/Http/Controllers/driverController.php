<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Driver;
use App\Models\Estimate;

class driverController extends Controller
{
    public function driverdash()
    {
        
            return view('driver.dash');
       
    }

    public function task()
    {
        $allocated = Customer::orderBy('created_at', 'desc')->where('driver_id', auth()->user()->id)->get();
        //dd($allocated);
        return view('driver.task')->with('allocated', $allocated);
       
    }

    public function acceptOrder($id){
        $accept = Customer::find($id)->update(['accepted'=> 1]);
        if($accept){
            \Mail::send('emails.orderaccepted', array(), function($message)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "Ogaglobal Logistics");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('We Received Your Order Request');
        });
    }

        return back();
    }

    public function pickedUp($id){
       $picked_1 =  Customer::find($id)->update(['accepted'=> 2]);
       $picked_2 =  Customer::find($id)->update(['picked_up'=> 1]);

        if($picked_1 && $picked_2){
            \Mail::send('emails.orderpickedup', array(), function($message)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "Ogaglobal Logistics");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('Your Order Has Been Picked!');
        });
    }

        return back();
    }

    public function delivered($id){
        $delivered_1 = Customer::find($id)->update(['accepted'=> 3]);
        $delivered_2 = Customer::find($id)->update(['delivered'=> 1]);

        if($delivered_1 && $delivered_2){
            \Mail::send('emails.orderdelivered', array(), function($message)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "Ogaglobal Logistics");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('Your Order Has Been Delivered');
        });
    }

        return back();
    }

    public function declined($id){
        $declined = Customer::find($id);
        $declined->delete();

        if($declined){
            \Mail::send('emails.ordercancelled', array(), function($message)
        {
            $email = 'martinjasmine42@gmail.com';
            $message->from('martinjasmine42@gmail.com', "Ogaglobal Logistics");
            $message->to('martinjasmine42@gmail.com');
            $message->subject('Your Order Has Been Cancelled');
        });
    }
        return redirect()->route('dashboard')->with('success', 'Ride Cancelled');
    }

    public function driver_info($id){
        $driver = Customer::where('driver_id', $id)->get();
        //dd($driver);
        return view('driver.statement')->with('drivers', $driver);
    }

        public function driver_kill($id)
       {
           $user = User::find($id);

           $deleted = $user->delete();

           if($deleted){

            Driver::where('user_id', $user->id)->delete();

                return back();
           }
       }


    public function statement()
    {
        
            return view('driver.statement');
       
    }

}
