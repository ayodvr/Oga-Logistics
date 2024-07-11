
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OgaLogistics</title>
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
            
            <div class="form-holder" style="background-image:url({{asset('log/images/19241.jpg);')}}">
                <div class="form-content">
                    <div class="form-items">
                    <div class="logo">
                            <img class="logo-size" style="width: 280px;height: auto;margin-bottom: 100px;" src="{{asset('log/images/log2.png')}}" alt="">
                        </div>
                        <div class="text-center">
                            @if(session('success'))
                            <div class="alert alert-success" style="width:92%; margin:auto">
                            {{session('success')}}</div>
                            @endif
                        </div>
                        <br>
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('forget.password.post') }}">
                            @csrf
                            <input class="form-control"  placeholder="E-mail Address" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn btn-forget"> {{ __('Email Password Reset Link') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your inbox <a href="https://brandio.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b0d9dfd6c2ddf0d9dfd6c2ddc4d5ddc0dcd1c4d59ed9df">[email&#160;protected]</a></p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/forget4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 15:40:29 GMT -->
</html>