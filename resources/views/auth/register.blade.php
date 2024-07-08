
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ogaglobal Logistics - Sign Up</title>
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
                        {{-- @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger" style="width:100%; margin:auto">
                                {{$error}}</div>
                            @endforeach
                            @endif
                            @if(session('success'))
                            <div class="alert alert-success" style="width:100%; margin:auto">
                            {{session('success')}}</div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger" style="width:100%; margin:auto">
                            {{session('error')}}</div>
                            @endif
                            <br> --}}
                        <div class="page-links">
                            <a href="/login">Login</a><a href="/register" class="active">Register</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input class="form-control" type="text" autocomplete="off" name="name" placeholder="First Name" required >
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            <input class="form-control" type="text" autocomplete="off" name="last_name" placeholder="Last Name" required >
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            <input class="form-control" type="email" autocomplete="off" name="email" placeholder="Email" required >
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <input class="form-control" type="text" autocomplete="off" max_lenght="11" name="phone" placeholder="Phone Number" required >
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                            <div class="input-group mb-3">
                                <input class="form-control" type="password" name="password" placeholder="Password" id="checkbox"  required >
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="myFunction()"></i></span>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" id="checkbox2" required >
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="myFunction()"></i></span>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="form-button">
                                <button id="submit" type="{{ __('register') }}" class="ibtn">Register</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
function myFunction() {
  var x = document.getElementById("checkbox");
  var y = document.getElementById("checkbox2");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>