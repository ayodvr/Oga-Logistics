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
            <img class="taxi-img_img" src="{{asset('main/assets/images/let-you-screen/logo-2.svg')}}" alt="logo">
          </div>
        </div>
      </div>
      <div class="let-you-social-sec">
        <div class="lets_you_in_box">
          <h1 class="d-none">hidden</h1>
          <h2 class="lets_you_in_text">Password Reset</h2>
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
            
            <p>To reset your password, enter the email address you use to sign in to Ogaglobal Logistics</p>  
            <br>             
          <form method="POST" action="{{ route('forget.password.post') }}" >
            @csrf
            
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-regular fa-envelope"></i></span>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" :value="old('email')" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <br>
           
            <div class="sign-in-password-btn mt-32">
            <button id="submit" type="submit" class="ibtn" style="width: 100%;border-radius: 12px;background: #f78f33;display: flex;align-items: center;justify-content: center;padding: 15px 0;color: var(--1, #FFF);text-align: center;font-family: League Spartan, sans-serif;font-size: 20px;font-style: normal;font-weight: 500;line-height: 24px;margin: auto;max-width: 600px;"><b>{{ __('Email Password Reset Link') }}</b></button> 
            
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

  <script src="{{asset('main/assets/js/jquery.min-3.js')}}"></script>
  <script src="{{asset('main/assets/js/slick.min-3.js')}}"></script>
  <script src="{{asset('main/assets/js/bootstrap.bundle.min-3.js')}}"></script>
  <script src="{{asset('main/assets/js/intlTelInput.min-2.js')}}"></script>
  <script src="{{asset('main/assets/js/flag-2.js')}}"></script>
  <script src="{{asset('main/assets/js/custom-3.js')}}"></script>
</body>
</html>
