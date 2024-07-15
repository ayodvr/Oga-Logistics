<!DOCTYPE html>
<html lang="en">
    <title>Ogaglobal Logistics - Dashboard</title>
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
    <!-- app style -->
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
            @include('includes.header')
            <div class="app-container" >
                @include('includes.aside')
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
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js')}}"></script>
  <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
  @include('sweetalert::alert')
<script>
    // link method for delete/trash
    $('.destroy-confirm').on('click', function (event) {
    var name = $(this).data("name");
    event.preventDefault();
    const url = $(this).attr('href');
        swal({
            title:  `Ensure payment been made before you fulfill order`,
            text: `${name}`,
            icon: 'warning',
            buttons: ["Cancel", "Yes...Confirm!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
    });
});
</script>
</body>
</html>