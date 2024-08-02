<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taxigo - Taxi Booking Mobile App</title>
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
    <div class="loader-mask">
      <div class="loading-window">
        <div class="car">
          <div class="strike"></div>
          <div class="strike strike2"></div>
          <div class="strike strike3"></div>
          <div class="strike strike4"></div>
          <div class="strike strike5"></div>
          <div class="car-detail spoiler"></div>
          <div class="car-detail back"></div>
          <div class="car-detail center"></div>
          <div class="car-detail center1"></div>
          <div class="car-detail front"></div>
          <div class="car-detail wheel"></div>
          <div class="car-detail wheel wheel2"></div>
        </div>
      </div>
    </div>
    <!-- Preloader end -->
    <!-- Sign up screen content start -->
    <div class="let-you-page-main">
      <div class="let-you-top" id="clouds">
        <div class="let-you-top-wrap">
          <header class="back-btn">
            <a href="javascript:history.go(-1)">
              <img src="{{asset('main/assets/svg/back-btn-arrow.svg')}}" alt="back-btn">
            </a>
          </header>
          <div class="taxi-img_main">
            <img class="taxi-img_img" src="{{asset('main/assets/images/let-you-screen/logo.svg')}}" alt="logo">
          </div>
        </div>
      </div>
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
            <div class="form-details-sign-in mt-32">
              <span>
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="mask0_330_7195" style="mask-type:alpha" maskunits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                    <rect width="24" height="24" fill="white"></rect>
                  </mask>
                  <g mask="url(#mask0_330_7195)">
                    <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6 21V19C6 17.9391 6.4JUdGzvrMFDWrUUwY3toJATSeNwjn54LkCnKBPRzDuhzi5vSepHfUckJNxRL2gjkNrSqtCoRUrEDAgRwsQvVCjZbRyFTLRNyDmT1a1boZV1716C17.5786 16.9217 18 17.9391 18 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </svg>
              </span>
              <input type="text" id="name" placeholder="Your Name" class="sign-in-custom-input">
            </div>
            <div class="mobile-form mt-16">
              <input type="number" id="mobile_code" class="sign-in-custom-input" placeholder="Enter Mobile Number">
            </div>
          </form>
          <div class="sign-in-password-btn mt-32">
            <a href="verify-number.html.htm">Sign Up</a>
          </div>
          <div class="or-section mt-32">
            <p>or continue with</p>
          </div>
          <div class="icons_main mt-32">
            <a href="https://www.facebook.com" target="_blank">
              <img class="icons" src="assets/images/let-you-screen/fb-icon.svg" alt="Icon-fb">
            </a>
            <a href="https://www.google.com" target="_blank">
              <img class="icons" src="assets/images/let-you-screen/google-icon.svg" alt="Icon-google">
            </a>
            <a href="https://www.icloud.com" target="_blank">
              <img class="apple" src="assets/images/let-you-screen/apple-icon.svg" alt="Icon-apple">
            </a>
            <a href="https://wa.me/+12345678899" target="_blank">
              <img class="icons" src="assets/images/let-you-screen/whatsapp.svg" alt="Icon-whatsapp">
            </a>
          </div>
        </div>
      </div>
      <footer id="let-you-footer">
        <div class="block-footer">
          <p>Already have an account?<a href="sign-in.html.htm">Sign in</a></p>
        </div>
      </footer>
    </div>
    <!-- Sign up screen content end -->
  </div>
  <script src="{{asset('main/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('main/assets/js/slick.min.js')}}"></script>
  <script src="{{asset('main/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('main/assets/js/intlTelInput.min.js')}}"></script>
  <script src="{{asset('main/assets/js/flag.js')}}"></script>
  <script src="{{asset('main/assets/js/custom.js')}}"></script>
</body>
</html>
