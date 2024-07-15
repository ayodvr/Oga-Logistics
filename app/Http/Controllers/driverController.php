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

    public function acceptOrder($id)
    {
        $accept = Customer::find($id)->update(['accepted' => 1]);
        $trackingId = Customer::find($id);
        $user_details = User::where('id', $trackingId->user_id)->first();

        if ($trackingId) {
            $trackingValue = $trackingId->tracking;
            $user_name = $user_details['name'];

            \Mail::send('emails.orderaccepted', [
                'trackingId' => $trackingValue,
                'user_name'  => $user_name
            ], function ($message) use ($trackingValue) {
                $tracking = Customer::where('tracking', $trackingValue)->first();
                $userMail = User::where('id', $tracking->user_id)->first();
                $recipient = $userMail['email'];

                $message->from('info@ogalogistics.com', 'Ogaglobal Logistics');
                $message->to($recipient);
                $message->subject('We Received Your Order Request');
            });
        }

        return back();
    }

    public function pickedUp($id){
       $picked_1 =  Customer::find($id)->update(['accepted'=> 2]);
       $picked_2 =  Customer::find($id)->update(['picked_up'=> 1]);
       $trackingId = Customer::find($id);
       $user_details = User::where('id', $trackingId->user_id)->first();

        if($picked_1 && $picked_2 && $trackingId){
        $trackingValue = $trackingId->tracking;
        $user_name = $user_details['name'];

        \Mail::send('emails.orderpickedup', [
            'trackingId' => $trackingValue,
            'user_name'  => $user_name
        ], function ($message) use ($trackingValue)
        {
            $tracking = Customer::where('tracking', $trackingValue)->first();
            $userMail = User::where('id', $tracking->user_id)->first();
            $recipient = $userMail['email'];

            $message->from('info@ogalogistics.com', 'Ogaglobal Logistics');
            $message->to($recipient);
            $message->subject('Your Order Has Been Picked');
        });
    }

        return back();
    }

    public function delivered($id){
        $delivered_1 = Customer::find($id)->update(['accepted'=> 3]);
        $delivered_2 = Customer::find($id)->update(['delivered'=> 1]);
        $trackingId = Customer::find($id);
        $user_details = User::where('id', $trackingId->user_id)->first();

        if($delivered_1 && $delivered_2 && $trackingId){
            $trackingValue = $trackingId->tracking;
            $origin        = $trackingId->origin;
            $destination   = $trackingId->destination;
            $total_cost    = $trackingId->trip_cost;
            $user_name     = $user_details['name'];
            \Mail::send('emails.orderdelivered', [
                'trackingId'  => $trackingValue,
                'origin'      => $origin,
                'destination' => $destination,
                'total_cost'  => $total_cost,
                'user_name'   => $user_name
        ], function ($message) use ($trackingValue)
        {
            $tracking = Customer::where('tracking', $trackingValue)->first();
            $userMail = User::where('id', $tracking->user_id)->first();
            $recipient = $userMail['email'];

            $message->from('info@ogalogistics.com', 'Ogaglobal Logistics');
            $message->to($recipient);
            $message->subject('Your Order Has Been Delivered!');
        });
    }

        return back();
    }

    public function declined($id){
        $declined = Customer::find($id);
        $declined->delete();

        $tracking = $declined->tracking;
        $user_details = User::where('id', $declined->user_id)->first();
        
        if($user_details){
            $user_name = $user_details['name'];
            $recipient = $user_details['email'];
            $tracking_id = $tracking;
    
            \Mail::send('emails.ordercancelled',[
                'user_name'  => $user_name,
                'trackingId' => $tracking_id
            ], function($message) use ($recipient)
        {
            $email = $recipient;
            $message->from('info@ogalogistics.com', "Ogaglobal Logistics");
            $message->to($recipient);
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

           if($user){

            $deleted = $user->delete();

            Driver::where('user_id', $user->id)->delete();

                return back();
                
           }else{

                return back();
           }
       }


    public function statement()
    {
        
            return view('driver.statement');
       
    }

}
