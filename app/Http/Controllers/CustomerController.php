<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Estimate;
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

        // $data = [
        //     'origin'          => $request->origin,
        //     'destination'     => $request->destination,
        //     'trip_distance'   => $request->trip_distance,
        //     'trip_time'       => $request->trip_time,
        //     'trip_cost'       => $request->trip_cost,
        //     'user_id'         => $request->user_id,
        //     'hashed'          => $string,
        //     'tracking'        => "OG"."-".$randomNumber,
        //     'order_id'        => "OD"."-".$orderNumber,
        //     'driver_id'       => 0
        // ];

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
        $order->driver_id      = 0;
        $order->assigned       = 0;
        $order->accepted       = 0;
        $order->picked_up      = 0;
        $order->delivered      = 0;

        $order->save();

        $summary = Customer::findorfail($order->id)->latest()->first();

        if($summary){
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
