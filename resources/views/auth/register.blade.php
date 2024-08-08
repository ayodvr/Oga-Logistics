<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ogaglobal Logistics</title>
  <link rel="icon" href="{{asset('main/assets/images/favicon/icon.png')}}">
  <link href="../../../../css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
  <link href="../../../../css2-1?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('main/assets/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/intlTelInput.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('main/assets/css/media-query.css')}}">
</head>
<body>
  <div class="site-content">
    <!-- Preloader start -->
   
    <!-- Preloader end -->
    <!-- Sign up screen content start -->
    <div class="let-you-page-main">
      <div class="let-you-top" id="clouds">
        <div class="let-you-top-wrap">
          <header class="back-btn">
            <a href="/login">
              <img src="{{asset('main/assets/svg/back-btn-arrow.svg')}}" alt="back-btn">
            </a>
          </header>
          <div class="taxi-img_main">
          <img class="taxi-img_img" src="{{asset('main/assets/images/let-you-screen/og-fav.png')}}" style="width: 83px; height: 80px" alt="Ogaglobal">
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="let-you-social-sec">
        <div class="lets_you_in_box">
          <h1 class="d-none">hidden</h1>
          <h2 class="lets_you_in_text">Sign Up</h2>
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
          <form method="POST" action="{{ route('register') }}">
          @csrf
            
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter First Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-regular fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Enter Last Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-regular fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Enter Email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-phone"></i></span>
                <input type="text"  class="form-control" placeholder="Enter Mobile Number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <input type="password" class="form-control" name="password"  id="password" aria-label="Sizing example input" placeholder="Password" id="password" aria-describedby="inputGroup-sizing-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="togglePassword('password', this)"> </i></span>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" id="confirm-password"  aria-label="Sizing example input" placeholder="Password" aria-describedby="inputGroup-sizing-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-eye" style="font-size:18px;margin-top:1px;" onclick="togglePassword('confirm-password', this)"> </i></span>
            </div>
          <br>
          <div class="sign-in-password-btn mt-32">
          <button id="submit" type="{{ __('register') }}" class="ibtn" style="width: 100%;border-radius: 12px;background: #fd6420;display: flex;align-items: center;justify-content: center;padding: 15px 0;color: var(--1, #FFF);text-align: center;font-family: League Spartan, sans-serif;font-size: 20px;font-style: normal;font-weight: 500;line-height: 24px;margin: auto;max-width: 600px;"><b>Sign In</b></button> 
            
          </div>
          </form>
         
          
        </div>
      </div>
      <footer id="let-you-footer">
        <div class="block-footer">
          <p>Already have an account?<a href="/login">Sign in</a></p>
        </div>
      </footer>
    </div>
    <!-- Sign up screen content end -->
  </div>

  <script>
        function togglePassword(checkbox, element) {
            const passwordInput = document.getElementById(checkbox);
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
      
             // Change the icon based on password visibility
             element.textContent = type === 'password' ? '' : '';
      
        }
      
      </script>
  <script src="{{asset('main/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('main/assets/js/slick.min.js')}}"></script>
  <script src="{{asset('main/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('main/assets/js/intlTelInput.min.js')}}"></script>
  <script src="{{asset('main/assets/js/flag.js')}}"></script>
  <script src="{{asset('main/assets/js/custom.js')}}"></script>
</body>
</html>
