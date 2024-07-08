<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Verify;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'      => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:191'],
            'email'     => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone'     => ['required', 'string', 'max:11'],
            'password'  => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
      
        $random = random_int(100000, 999999);
        
        $user = User::create([
            'name'        => $request->name,
            'last_name'   => $request->last_name,
            'email'       => $request->email,
            'verify_user' => 0,
            'code'        => $random,
            'phone'       => $request->phone,
            'password'    => Hash::make($request->password)
        ]);

        $user->addRole('customer');

        Verify::create([
            'user_id'   => $user->id,
            'token'     => $user->code
        ]);

        $verify_user = $user->code;
    
        \Mail::send('emails.econfirmcode', array(

            'confirm_code' => $user['code'],

        ), function($message) use ($request)
        {
            $email = $request->email;
            $message->from('martinjasmine42@gmail.com', "Oga Logistics!");
            $message->to($email);
            $message->subject('Activate your account!');    
        });

        return redirect(route('verify.password.get'));

        // return view('auth.verify_code')->with('verify_user', $verify_user);

        // event(new Registered($user));
       
        // Auth::login($user);
    }
}
