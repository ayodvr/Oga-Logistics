<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ogaglobal Logistics</title>
  <link rel="icon" href="{{asset('main/assets/images/favicon/icon-3.png')}}">
  <link href="../../../../css2-6?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
  <link href="../../../../css2-7?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('main/assets/css/all.min-3.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/slick-3.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/bootstrap.min-3.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/intlTelInput-2.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/style-3.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/media-query-3.css')}}">
  <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
<body>
  <div class="site-content">
    <!-- Preloader start -->
   
    <!-- Preloader end -->
    <!-- Sign in screen content start -->
    <div class="let-you-page-main">
      <div class="let-you-top">
        <div class="let-you-top-wrap">
          <header class="back-btn">
           
          </header>
          <div class="taxi-img_main">
            <img class="taxi-img_img" src="{{asset('main/assets/images/let-you-screen/og-fav.png')}}" style="width: 83px; height: 80px" alt="Ogaglobal">
          </div>
        </div>
        {{-- <button id="installButton">Install App</button> --}}
      </div>
      <div class="let-you-social-sec">
        <div class="lets_you_in_box">
          <h1 class="d-none">hidden</h1>
          <h2 class="lets_you_in_text">Sign In</h2>
          <br>
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
          <form method="POST" action="{{ route('login') }}" >
            @csrf
            
            <div class="input-group input-group-lg">
                <input type="text" class="form-control" aria-label="Sizing example input" name="email" placeholder="Email Address" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
           
            <div class="input-group input-group-lg">
                <input type="password" class="form-control" name="password"  id="checkbox" aria-label="Sizing example input" placeholder="Password" aria-describedby="inputGroup-sizing-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="myFunction()"> </i></span>
            </div>
            

            <div class="sign-in-password-btn mt-32">
            <button id="submit" type="{{ __('login') }}" class="ibtn" style="width: 100%;border-radius: 12px;background: #fd6420;display: flex;align-items: center;justify-content: center;padding: 15px 0;color: var(--1, #FFF);text-align: center;font-family: League Spartan, sans-serif;font-size: 20px;font-style: normal;font-weight: 500;line-height: 24px;margin: auto;max-width: 600px;"><b>Sign In</b></button> 
            
            </div>
            <div class="block-footer" style="text-align:center;margin-top: 20px;">
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
      <footer id="let-you-footer">
        <div class="block-footer">
        
          <p>Don’t have an account? <a href="/register">Sign up</a></p>
        </div>
      </footer>
    </div>
    <!-- Sign in screen content end -->
  </div>
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
  <script src="{{asset('main/assets/js/jquery.min-3.js')}}"></script>
  <script src="{{asset('main/assets/js/slick.min-3.js')}}"></script>
  <script src="{{asset('main/assets/js/bootstrap.bundle.min-3.js')}}"></script>
  <script src="{{asset('main/assets/js/intlTelInput.min-2.js')}}"></script>
  <script src="{{asset('main/assets/js/flag-2.js')}}"></script>
  <script src="{{asset('main/assets/js/custom-3.js')}}"></script>
  <script>
    let deferredPrompt;
    
    // Listen for the beforeinstallprompt event
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault(); // Prevent the default prompt
        deferredPrompt = e; // Save the event for later
        showInstallButton(); // Show the install button
    });
    
    // Show the install button
    function showInstallButton() {
        const installButton = document.getElementById('installButton');
        if (installButton) {
            installButton.style.display = 'block';
        }
    }
    
    // Handle the install button click event
    document.getElementById('installButton').addEventListener('click', (e) => {
        const installButton = document.getElementById('installButton');
        if (installButton && deferredPrompt) {
            installButton.style.display = 'none'; // Hide the button
            deferredPrompt.prompt(); // Show the installation prompt
            deferredPrompt.userChoice.then((choiceResult) => {
                if (choiceResult.outcome === 'accepted') {
                    console.log('User accepted the install prompt');
                } else {
                    console.log('User dismissed the install prompt');
                    installButton.style.display = 'block'; // Show the button again if the user dismissed
                }
                deferredPrompt = null; // Clear the prompt
            });
        }
    });
    
    // Check if the app is already installed
    window.addEventListener('appinstalled', (evt) => {
        console.log('PWA was installed');
        hideInstallButton(); // Hide the button if the app is installed
    });
    
    // Register the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js')
            .then(function(registration) {
                console.log('Service Worker registered with scope:', registration.scope);
            }).catch(function(error) {
                console.log('Service Worker registration failed:', error);
            });
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
