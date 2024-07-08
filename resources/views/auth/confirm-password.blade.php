<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oga Logistics</title>
    <link rel="shortcut icon" type="image/png" href="log/images/Nairacoinr.png">
    <link rel="stylesheet" type="text/css" href="log/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="log/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="log/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="log/css/iofrm-theme14.css">
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
                                    <img  src="{{asset('../assets/dassets/images/logo.svg')}}" style="width: 80px; height: 95px;">
                                </div>
                            </a>
                        </div>
                        <h3>Forgot Password</h3>
                        <p>{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
                        
                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf
                            <input class="form-control" type="password" name="password" placeholder="password" required>
                            <div class="form-button">
                                <button id="submit" type="{{ __('Confirm') }}" class="ibtn">Confirm</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="log/js/jquery.min.js"></script>
<script src="log/js/popper.min.js"></script>
<script src="log/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>