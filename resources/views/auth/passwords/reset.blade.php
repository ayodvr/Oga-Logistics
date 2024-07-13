<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ogaglobal Logistics - Verify Account</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('log/images/Nairacoinr.png')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/iofrm-theme14.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="/">
                                <div >
                                    <img  src="{{asset('log/images/log2.png')}}" style="width: 280px;height: auto;margin-top: 100px;">
                                </div>
                            </a>
                        </div>
                        <h3>Reset Password</h3>
                        
                        <form method="POST" action="{{ url('user-reset-password') }}">
                            @csrf
                         <!-- Password Reset Token -->
                          {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input class="form-control" id="email"  type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus autocomplete="username" placeholder="E-mail">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password" placeholder="New Password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                           
                            <div class="form-button">
                            <button id="submit" type="{{ __('Reset Password') }}" class="ibtn">Reset Password</button>
                            </div>
                           

    
        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('log/js/jquery.min.js')}}"></script>
<script src="{{asset('log/js/popper.min.js')}}"></script>
<script src="{{asset('log/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>