<!DOCTYPE html>
<html lang="en">
    <title>Mentor - Bootstrap 4 Admin Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}" />
    <link rel="stylesheet" href="{{asset('mobstyle/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('mobstyle/css/styles.css')}}">
    <!-- app style -->
    <style>
        .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    width: 600px;
    height: 500px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
   
}
.close {
    background: red;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: red;
}
    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="{{ asset('assets/img/loader/loader.svg') }}" alt="loader">
                    </div>
                </div>
            </div>
            @include('includes.driveheader')
            <div class="app-container">
                @include('includes.driveaside')
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    @yield('content')
                </div>
                <!-- end app-main -->
            </div>
            @include('includes.footer')
        </div>
    </div>

    <script src="{{ asset('assets/js/vendors.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>