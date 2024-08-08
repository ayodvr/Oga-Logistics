@extends('mobilelayouts.taxi')

@section('content')


<header id="top-header">
			<div class="header-wrap">
				<div class="header-back">
					<a href="javascript:history.go(-1)">
						<img src="{{asset('main/assets/svg/back-btn-white-2.svg')}}" alt="back-btn">
					</a>
				</div>
				<div class="header-name">
					<p>FAQs</p>
				</div>
			</div>
			<div class="boder"></div>
		</header>
		<!-- Header end -->
		<!-- Faq screen content start -->
		<section id="faq-section">
			<div class="container">
				<div class="faq-section-wrap">
					<h1 class="d-none">Hidden</h1>
					<h2 class="d-none">Cancel rides</h2>
					<div class="faq-top">
						<form class="select-lang-sec mt-24">
							<div class="lang-sec">
								<input type="radio" id="select-lang1" name="select-language" checked="">
								<label class="custom-radio-sel-lang" for="select-lang1">General</label>
							</div>
							<div class="lang-sec">
								<input type="radio" id="select-lang2" name="select-language">
								<label class="custom-radio-sel-lang " for="select-lang2">Account</label>
							</div>
							<div class="lang-sec">
								<input type="radio" id="select-lang3" name="select-language">
								<label class="custom-radio-sel-lang " for="select-lang3">Service</label>
							</div>
							<div class="lang-sec">
								<input type="radio" id="select-lang4" name="select-language">
								<label class="custom-radio-sel-lang " for="select-lang4">Payment</label>
							</div>
						</form>
					</div>
					<div class="faq-search mt-24">
						<div class="input-group search-page-searchbar ">
							<span class="input-group-text search-iconn">
								<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.9395 1.9313C5.98074 1.9313 1.94141 5.97063 1.94141 10.9294C1.94141 15.8881 5.98074 19.9353 10.9395 19.9353C13.0575 19.9353 15.0054 19.193 16.5449 17.9606L20.293 21.7067C20.4821 21.888 20.7347 21.988 20.9967 21.9854C21.2587 21.9827 21.5093 21.8775 21.6947 21.6924C21.8801 21.5073 21.9856 21.2569 21.9886 20.9949C21.9917 20.7329 21.892 20.4802 21.7109 20.2908L17.9629 16.5427C19.1963 15.0008 19.9395 13.0498 19.9395 10.9294C19.9395 5.97063 15.8982 1.9313 10.9395 1.9313ZM10.9395 3.93134C14.8173 3.93134 17.9375 7.05153 17.9375 10.9294C17.9375 14.8072 14.8173 17.9352 10.9395 17.9352C7.06162 17.9352 3.94141 14.8072 3.94141 10.9294C3.94141 7.05153 7.06162 3.93134 10.9395 3.93134Z" fill="#000000"></path>
								</svg>
							</span>
							<input type="search" placeholder="Search" class="form-control search-text" id="search-input">
						</div>
						<div class="boder mt-24"></div>
					</div>
					<div class="faq-bottom">
						<div class='nested-accordion'>
							<h3 class="faq-txt1 mt-24 ">What types of parcels can I send?</h3>
							<div class='comment mt-12'>
							We handle a variety of parcels including documents, packages, and oversized items. Please ensure that your parcel complies with our Prohibited Items policy.
							</div>
							<div class="boder mt-24"></div>
						</div>
						<div class='nested-accordion'>
							<h3 class="faq-txt1 mt-24">How to use Taxigo?</h3>
							<div class='comment mt-12'>
								Arcu tortor pellentesque pharetra gravida viverra fermentum. Sit elementum gravida ut dis felis. Duis faucibus cursus tincidunt consectetur nec. Magna platea aliquam morbi bibendum sed nec.
							</div>
							<div class="boder mt-24"></div>
						</div>
						<div class='nested-accordion'>
							<h3 class="faq-txt1 mt-24">How do I cancel a taxi booking?</h3>
							<div class='comment mt-12'>
								Arcu tortor pellentesque pharetra gravida viverra fermentum. Sit elementum gravida ut dis felis. Duis faucibus cursus tincidunt consectetur nec. Magna platea aliquam morbi bibendum sed nec.
							</div>
							<div class="boder mt-24"></div>
						</div>
						<div class='nested-accordion'>
							<h3 class="faq-txt1 mt-24">Is Taxigo free to use?</h3>
							<div class='comment mt-12'>
								Arcu tortor pellentesque pharetra gravida viverra fermentum. Sit elementum gravida ut dis felis. Duis faucibus cursus tincidunt consectetur nec. Magna platea aliquam morbi bibendum sed nec.
							</div>
							<div class="boder mt-24"></div>
						</div>
						<div class='nested-accordion'>
							<h3 class="faq-txt1 mt-24">How to add promo on Taxigo?</h3>
							<div class='comment mt-12'>
								Arcu tortor pellentesque pharetra gravida viverra fermentum. Sit elementum gravida ut dis felis. Duis faucibus cursus tincidunt consectetur nec. Magna platea aliquam morbi bibendum sed nec.
							</div>
						</div>
						<div id="error-message">
							<div class="no-data mt-24">
								<div class="noresult-img">
									<img src="assets/images/wallet/not-found-img-2.png" alt="not-found-img" class="img-fluid">
								</div>
								<div class="noresult-content mt-24">
									<h2>Not Found</h2>
									<p class="mt-16">Sorry, the keyword you entered cannot be found, please check again or search with another keyword.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>






@endsection