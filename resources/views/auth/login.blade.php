
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ogaglobal Logistics - Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('log/css/iofrm-theme4.css')}}">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('og-icon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
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
            
            <div class="form-holder" >
                
                <div class="form-content">
                    
                    <div class="form-items">
                        <div class="logo">
                            <img class="logo-size" style="width: 280px;height: auto;margin-bottom: 100px;" src="{{asset('log/images/log2.png')}}" alt="">
                        </div>
                        <h3>Welcome to OGAGLOBAL LOGISTICS</h3>
                        <p>Your gateway to effortless shipping and tracking.</p>
                        @if(count($errors) > 0)
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
                            <br>
                        <div class="page-links">
                            <a href="login4.html" class="active">Login</a><a href="/register">Register</a>
                        </div>
                        <form method="POST" action="{{ route('login') }}" >
                    @csrf
                    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color:red;font-weight:bold;" />
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                        </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" name="password" placeholder="Password" id="checkbox"  required >
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="myFunction()"></i></span>
                                
                            </div>
                            <div class="form-button">
                                <button id="submit" type="{{ __('login') }}" class="ibtn" >Login</button> 
                                @if(Route::has('password.request'))
                                <a
                                    href="{{ route('password.request') }}"
                                    >Forgot password?</a
                                >
                                @endif
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if ("serviceWorker" in navigator) {
        // Register a service worker hosted at the root of the
        // site using the default scope.
        navigator.serviceWorker.register("/sw.js").then(
        (registration) => {
            console.log("Service worker registration succeeded:", registration);
        },
        (error) => {
            console.error(`Service worker registration failed: ${error}`);
        },
    );
    } else {
        console.error("Service workers are not supported.");
    }
</script>
<script>
    function myFunction() {
        var x = document.getElementById("checkbox");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>
</html>