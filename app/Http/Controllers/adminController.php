<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Partner;
use App\Models\Account;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
      public function admindashboard()
    {
        return view('admin.dash');
    }

    public function managedriver()
    {
        $users = User::whereHasRole('driver')->get();
        return view('admin.managedriver')->with('users', $users);
    }

    public function driverreg()
    {
        return view('admin.driverreg');
    }

    public function storeDriver(Request $request)
    {
        $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:191'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'phone' => ['required', 'string', 'max:11'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
          
            $random = random_int(100000, 999999);
            
            $user = User::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $user->addRole('driver');

            if($user){

                $driver = Driver::create([
                    'user_id'=> $user->id,
                    'name' => $request->name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'nin' => $request->nin,
                    'state' => $request->state,
                    'lga' => $request->lga,
                ]);

                return back()->with('success', 'Driver has been registered');
            }
    }

    public function managepartners()
    {
        $partners = Partner::all();
        return view('admin.managepartners')->with('partners', $partners);
    }

    public function accounts()
    {
        $accounts = Account::all();
        return view('admin.account')->with('accounts', $accounts);
    }

    public function edit_account(string $id)
    {
        $account = Account::findorfail($id)->first();
        return view('admin.edit_account')->with('account', $account);
    }

    public function update_account(Request $request, string $id)
    {
        // dd($request->all());
        $data = $request->except(['_method','_token']);
        $trip = Account::findorfail($id)->first();
        $trip->update($data);
        return back();
    }

    public function partnersreg()
    {
        
            return view('admin.partnersreg');
       
    }

    public function storePartner(Request $request)
    {
        $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:191'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'phone' => ['required', 'string', 'max:11'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
          
            $random = random_int(100000, 999999);
            
            $user = User::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $user->addRole('partners');

            if($user){

                $driver = Partner::create([
                    'name'      => $request->name,
                    'last_name' => $request->last_name,
                    'email'     => $request->email,
                    'phone'     => $request->phone,
                    'bname'     => $request->bname,
                    'cac'       => $request->cac,
                    'address'   => $request->address,
                    'state'     => $request->state,
                    'lga'       => $request->lga
                ]);

                return back()->with('success', 'Partner has been registered');
            }
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
        $partners = Partner::all();
        return view('admin.manageadminuser')->with('partners', $partners);
            ;
       
    }

    public function adminuserreg()
    {
        
            return view('admin.adminuserreg');
       
    }

    public function storeAdminUser(Request $request)
    {
        $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:191'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'phone' => ['required', 'string', 'max:11'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
          
            $random = random_int(100000, 999999);
            
            $user = User::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $user->addRole('admin');

            return back()->with('success', 'Admin user has been registered');
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
        $estimate = Customer::orderBy('id', 'desc')->get();
        $driver = User::orderBy('created_at', 'desc')->whereHasRole(['driver'])->get();
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
                'assigned'           => $driver_name[0]['name']
        ];

        // dd($data);
        
        $customer = Customer::find($id);

        $customer->update($data);

            if($customer){
                $orderId       = $data['order_id'];
                $origin        = $data['origin'];
                $destination   = $data['destination'];
                $total_cost    = $data['order_id'];
                $driver_name   = $data['assigned'];
                \Mail::send('emails.driverOrder', [
                    'orderId'     => $orderId,
                    'origin'      => $origin,
                    'destination' => $destination,
                    'total_cost'  => $total_cost,
                    'driver_name' => $driver_name
            ], function ($message) use ($orderId)
            {
                $order = Customer::where('order_id', $orderId)->first();
                $userMail = User::where('id', $order->driver_id)->first();
                $recipient = $userMail['email'];

                $message->from('info@ogalogistics.com', 'Ogaglobal Logistics');
                $message->to($recipient);
                $message->subject('You Have a Delivery To Fulfill');
            });
        }

        return back();
        }
    }

}
