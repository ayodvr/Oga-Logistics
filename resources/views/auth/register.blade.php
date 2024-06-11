
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/iofrm-theme4.css')}}">
</head>
<body>
    <div class="form-body">
       
        <div class="row">
        <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('log/images/servv.png')}}" alt="">
                </div>
            </div>
            <div class="form-holder"  style="background-image:url({{asset('log/images/19241.jpg);')}})">
                <div class="form-content">
                    <div class="form-items">
                    <div class="logo">
                            <img class="logo-size" style="width: 280px;height: auto;margin-bottom: 100px;" src="{{asset('log/images/log2.png')}}" alt="">
                        </div>
                        <h3>Welcome aboard!.</h3>
                        <p>Ready to streamline your shipments with ease?.</p>
                        <div class="page-links">
                            <a href="/login">Login</a><a href="/register" class="active">Register</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input class="form-control" type="text" autocomplete="off" name="name" placeholder="First Name">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            <input class="form-control" type="text" autocomplete="off" name="last_name" placeholder="Last Name">
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            <input class="form-control" type="email" autocomplete="off" name="email" placeholder="Email">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <input class="form-control" type="text" autocomplete="off" max_lenght="11" name="phone" placeholder="Phone Number">
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            <input class="form-control" type="password" name="password" placeholder="Password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            <div class="form-button">
                                <button id="submit" type="{{ __('register') }}" class="ibtn">Register</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>