@extends('mobilelayouts.taxi')

@section('content')
		
		<!-- Header start -->
		<header id="top-header">
			<div class="header-wrap">
				<div class="header-back">
					<a href="javascript:history.go(-1)">
						<img src="{{asset('main/assets/svg/back-btn-white-2.svg')}}" alt="back-btn">
					</a>
				</div>
				<div class="header-name">
					<p>About Us</p>
				</div>
			</div>
			<div class="boder"></div>
		</header>
		<!-- Header end -->
		<!--About us screen content start -->
		<section id="about-us-section">
			<div class="container">
				<div class="about-us-section-wrap mt-24">
					<h1 class="d-none">About Us</h1>
					<h2 class="d-none">Hidden</h2>
					<div class="about-us-screen-full">
						<div class="privacy-first-content">
							<p class="privacy-txt1">Egestas nunc neque sed lobortis tellus, sociis justo felis. Id amet orci auctor diam dolor et metus. Fringilla nulla mauris fermentum, nisl diam diam. Urna maecenas id non enim massa id quis magna. Vulputate sapien elit habitasse elementum nibh aliquam sed. Nisi aliquet mus commodo interdum nisi, faucibus. Aliquet lectus ipsum massa viverra urna egestas.</p>
							<p class="privacy-txt2">Libero vulputate porta nisl tortor vitae. Proin pellentesque parturient ac euismod tortor malesuada pellentesque. Turpis leo blandit tristique eu phasellus viverra. Faucibus neque, urna nunc quis id. In luctus sagittis vitae aliquet. Felis dolor in sit arcu ut enim dis. Nibh molestie cursus euismod lacus leo, arcu magna enim blandit.</p>
							<p class="privacy-txt2">At adipiscing bibendum ultricies vitae at scelerisque dui turpis et. Aliquam lorem dui aliquet leo sed mauris, amet, at. At volutpat vel eget leo. Integer rhoncus odio massa arcu condimentum. Ac laoreet id malesuada vel metus egestas lacinia.</p>
						</div>
					</div>
					<div class="about-us-social-media mt-32">
						<div class="about-us-icon-wrapper">
							<div class="social-detail-about ">
								<div class="shape facebook-bg">
									<a href="https://www.facebook.com/" target="_blank">
										<img src="{{asset('main/assets/images/about-us/facebook-2.svg')}}" alt="facebook">
									</a>
								</div>
								<div>
									<p class="about-social-txt">Facebook</p>
								</div>
							</div>
							<div class="social-detail-about ">
								<div class="shape instragram-bg">
									<a href="https://www.instagram.com/" target="_blank">
										<img src="{{asset('main/assets/images/about-us/instragram-2.svg')}}" alt="instagram">
									</a>
								</div>
								<div>
									<p class="about-social-txt">Instagram</p>
								</div>
							</div>
							<div class="social-detail-about ">
								<div class="shape twitter-bg">
									<a href="https://twitter.com/" target="_blank">
										<img src="{{asset('main/assets/images/about-us/twitter-2.svg')}}" alt="twitter">
									</a>
								</div>
								<div>
									<p class="about-social-txt">Twitter</p>
								</div>
							</div>
							<div class="social-detail-about ">
								<div class="shape youtube-bg">
									<a href="https://www.youtube.com/" target="_blank">
										<img src="{{asset('main/assets/images/about-us/youtube-2.svg')}}" alt="youtube">
									</a>
								</div>
								<div>
									<p class="about-social-txt">YouTube</p>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</section>


@endsection