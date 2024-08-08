<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Taxigo - Taxi Booking Mobile App</title>
	<link rel="icon" href="{{asset('main/assets/images/favicon/icon-4.png')}}">
	<link href="../../../../css2-8?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
	<link href="../../../../css2-9?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('main/assets/css/all.min-4.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/slick-4.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/bootstrap.min-4.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/style-4.css')}}">
	<link rel="stylesheet" href="{{asset('main/assets/css/media-query-4.css')}}">
</head>
<body>
	<div class="site-content">
		
		<!-- Header start -->
		<header id="top-header">
			<div class="header-wrap">
				<div class="header-back">
					<a href="javascript:history.go(-1)">
						<img src="{{asset('main/assets/svg/back-btn-white-4.svg')}}" alt="back-btn">
					</a>
				</div>
				<div class="header-name">
					<p>Order Summary</p>
				</div>
			</div>
			<div class="boder"></div>
		</header>
		<!-- Header end -->
		<!-- Promocode screen content start -->
		<section id="promocode-screen">
			<div class="container">
				<div class="promocode-wrap mt-24">
					<h1 class="d-none">Hidden</h1>
					<div class="promocode-img">
						<img src="{{asset('mobstyle/icons/verified.svg')}}" alt="Verification Successful">
						<h1 class="mt-32"> Awesome!</h1>	
					</div>
                    <br>
					<p  style="text-align: center;color: black;">Your order has been initiated, Rider will be in touch with you shortly.</p>
					<div class="search">
                        <article class="card">
                            <div class="card-body">
                                <div class="" style="padding-bottom: 5px;"> <strong>Tracking #:</strong> {{$summary->tracking}}</div>
                                <div class="" style="padding-bottom: 5px;"> <strong>Shipping From:</strong>  {{$summary->origin}}</div>
                                <div class="" style="padding-bottom: 5px;"> <strong>Shipping To:</strong>  {{$summary->destination}}</div>
                                <div class="" style="padding-bottom: 5px;"> <strong>Estimated Delivery In:</strong>  {{$summary->trip_time}}<br>(Subject to change due to traffic or unforseen circumstances)</div>
                            </div>
                        </article>
					</div>
                    <div class="verify-number-btn">
                        <a href="homescreen.html.htm">Book My First Ride!</a>
                    </div>
                    <div clase="update-change-btn mt-32" >
						<a href="going10_screen.html-1.htm">Cancel Ride</a>
					</div>
                    <br>
                    <br>
					<div class="verify-number-btn">
						<a href="going10_screen.html-1.htm">Track Progress</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Promocode screen content end -->
	</div>
	<script src="{{asset('main/assets/js/jquery.min-4.js')}}"></script>
	<script src="{{asset('main/assets/js/slick.min-4.js')}}"></script>
	<script src="{{asset('main/assets/js/bootstrap.bundle.min-4.js')}}"></script>
	<script src="{{asset('main/assets/js/custom-4.js')}}"></script>
</body>
</html>