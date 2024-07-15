<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Estimate;
use App\Models\Account;
use GuzzleHttp\Client;
use Auth;

class CustomerController extends Controller
{

    public function requestRide(Request $request)
    {
        $data = [
            'origin'          => $request->origin,
            'destination'     => $request->destination,
            'trip_distance'   => $request->trip_distance,
            'trip_time'       => $request->trip_time,
            'trip_cost'       => $request->trip_cost,
            'user_id'         => $request->user_id
        ];
        $trip = Customer::create($data);
        return view('customer.trackorder')->with('trip', $trip);
    }

    public function index()
    {
        $estimate = Estimate::all();
        return view('admin.estimate')->with('estimate', $estimate);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estimate = Estimate::findorfail($id)->first();
        return view('admin.editEstimate')->with('estimate', $estimate);
    }


    public function orderPlaced(Request $request, $string)
    {
        $randomNumber = random_int(1000000000, 9999999999);
        $orderNumber = random_int(1000000, 9999999);

        $account = Account::all();
     
        $order                 = new Customer;
        $order->origin         = $request->origin;
        $order->destination    = $request->destination;
        $order->trip_distance  = $request->trip_distance;
        $order->trip_time      = $request->trip_time;
        $order->trip_cost      = $request->trip_cost;
        $order->user_id        = $request->user_id;
        $order->hashed         = $string;
        $order->tracking       = "OG"."-".$randomNumber;
        $order->order_id       = "OD"."-".$orderNumber;
        $order->acct_name      = $account[0]['acct_name'];
        $order->acct_number    = $account[0]['acct_number'];
        $order->bank_name      = $account[0]['bank_name'];

        $order->save();

        $summary = Customer::findorfail($order->id)->latest()->first();

        if($summary){
            $user_name = User::where('id', $summary->user_id)->get();
            $trackingValue = $summary->tracking;
            $origin        = $summary->origin;
            $destination   = $summary->destination;
            $total_cost    = $summary->trip_cost;
            $user_name     = $user_name[0]['name'];
            \Mail::send('emails.orderPlaced', [
                'trackingId'  => $trackingValue,
                'origin'      => $origin,
                'destination' => $destination,
                'total_cost'  => $total_cost,
                'user_name'   => $user_name
        ], function ($message) use ($trackingValue)
        {
            $tracking = Customer::where('tracking', $trackingValue)->first();
            $userMail = User::where('id', $tracking->user_id)->first();
            $recipient = [
                $userMail['email'],
                'info@ogalogistics.com'
            ];

            $message->from('info@ogalogistics.com', 'Ogaglobal Logistics');
            $message->to($recipient);
            $message->subject('Order Received!');
        });

            return view('customer.orderPlaced')->with('summary', $summary);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except(['_method','_token']);
        $trip = Estimate::findorfail($id)->first();
        $trip->update($data);
        return back();
    }

    public function fetch()
    {
        $estimate = Estimate::all();
        $baseFare = $estimate[0]['baseFare'];
        $ratePerKm = $estimate[0]['ratePerKm'];
        // Return base fare and rate per kilometer as JSON response
        return response()->json([
            'base_fare' => $baseFare,
            'rate_per_km' => $ratePerKm,
        ]);
        
    }

    public function verifyUser(Request $request){
        $token = User::where('code', $request->code)->update(['verify_user'=> 1]);

        if($token){
                \Mail::send('emails.ewelcome', array(), function($message)
            {
                $email = 'ihlwub508355388@gmail.com';
                $message->from('ihlwub508355388@gmail.com', "New Message From Oga Global Logistics!");
                $message->to('ihlwub508355388@gmail.com');
                $message->subject('Welcome to Oga Global Logistics!');
            });
        }
        return redirect()->route('login')->with('success','Your account has been verified, you can now login.');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
