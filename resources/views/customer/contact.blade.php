@extends('mobilelayouts.taxi')

@section('content')
	
		<!-- Header start -->
		<header id="top-header">
			<div class="header-wrap">
				<div class="header-back">
					<a href="javascript:history.go(-1)">
						<img src="{{asset('main/assets/svg/back-btn-white-3.svg')}}" alt="back-btn">
					</a>
				</div>
				<div class="header-name">
					<p>Contact Us</p>
				</div>
			</div>
			<div class="boder"></div>
		</header>
		<!-- Header end -->
		<!-- Contact us screen content start -->
		<section id="contact-us">
			<div class="container">
				<div class="enable-location-wrap mt-24">
					<div class="enable-img">
						<img src="{{asset('main/assets/images/contact-us/contact-us-img-3.png')}}" alt="contact-img">
					</div>
					<div class="enable-details mt-32">
						<h1>Contact Us</h1>
						<p class="sm-txt mt-16">If you face any trouble for item ordering feel free to contact us.</p>
					</div>
					<div class="benefits-details benefits-details1 mt-32">
						<div class="benefit-icon">
							<img src="{{asset('main/assets/images/contact-us/call-icon-3.svg')}}" alt="call-icon">
						</div>
						<div class="benefit-content">
							<a href="tel:+12324567789">
								<p class="no.txt">+1 232 456 7789</p>
							</a>
						</div>
					</div>
					<div class="benefits-details mt-8">
						<div class="benefit-icon">
							<img src="{{asset('main/assets/images/contact-us/message-icon-3.svg')}}" alt="message-icon">
						</div>
						<div class="benefit-content">
							<a href="mailto:help@foodist.com">
								<p class="no.txt">info@ogaglobal.com</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact us screen content end -->

@endsection