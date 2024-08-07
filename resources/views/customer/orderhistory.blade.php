@extends('mobilelayouts.main')
@section('content')

	<!-- Header start -->
    <header id="top-header" style="background-color: #F0F0F0">
			<div class="header-wrap">
				<div class="header-back">
					<a href="/account">
						<img src="{{asset('main/assets/svg/back-btn-white-4.svg')}}" alt="back-btn">
					</a>
				</div>
				<div class="header-name">
					<p>My Rides</p>
				</div>
			</div>
			<div class="boder"></div>
		</header>
		<!-- Header end -->
		<!-- Rides screen content start-->
		<section id="rides-upcoming">
			<div class="rides-upcoming-wrap">
				<h1 class="d-none">Hidden</h1>
				<ul class="nav nav-pills order-screen2-tab" id="rides-tab" role="tablist" style="background-color: #F0F0F0">
					<li class="nav-item" role="presentation">
						
                    </li>
					<li class="nav-item" role="presentation">
						<button class="nav-link active order-screen2-tab-btn" id="active-tab" data-bs-toggle="pill" data-bs-target="#active-ride" type="button" role="tab" aria-selected="true">History</button>
					</li>
					<li class="nav-item" role="presentation">

					</li>
				</ul>
				<div class="tab-content container" id="pills-tabContent">
                        
                        <div class="tab-pane fade show active" id="history" role="tabpanel" tabindex="0">
                                <div class="ride-active-now-wrap mt-24">
                                @foreach($orders as $orders)
                                    <div class="active-ride-sec">
                                        <p class="ride-time">{{$orders->created_at}} </p>
                                        <div class="ride-details">
                                            <div class="driver-trip-first-sec-wrap">
                                                
                                                <div class="driver-details">
                                                    <div class="driver-details-wrap">
                                                        <div class="driver-name">
                                                            <p><b>Tracking #:</b> {{$orders->tracking}}</p>
                                                        </div>
                                                        
                                                    </div>
                                                   
                                                </div>
                                               
                                            </div>
                                            <div class="boder mt-16"></div>
                                            <div class="ride-track mt-16">
                                                <div class="ride-track1">
                                                    <div class="yellow"></div>
                                                </div>
                                                <div class="ride-address">
                                                    <p class="ride-txt1">{{$orders->origin}}</p>
                                                </div>
                                                <div class="ride-track-time">
                                                    <p class="ride-txt2"></p>
                                                </div>
                                            </div>
                                            <div class="ride-track ride-track ">
                                                <div class="ride-track1">
                                                    <div class="black"></div>
                                                </div>
                                                <div class="ride-address">
                                                    <p class="ride-txt1">{{$orders->destination}}</p>
                                                </div>
                                                <div class="ride-track-time">
                                                    <p class="ride-txt2"></p>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="boder mt-16"></div>
                                                <div class="ride-more-content mt-16">
                                                    <div>
                                                        <span><img src="{{asset('main/assets/images/rides/icon1-1.svg')}}" alt="icon-img"></span>
                                                        <span class="ride-txt3">{{$orders->trip_distance}}</span>
                                                    </div>
                                                    <div>
                                                        <span><img src="{{asset('main/assets/images/rides/icon2-1.svg')}}" alt="icon-img"></span>
                                                        <span class="ride-txt3">{{$orders->trip_time}}</span>
                                                    </div>
                                                    <div>
                                                        <span><img src="{{asset('main/assets/images/rides/naira.svg')}}" alt="icon-img" width="20px" height="20px" ></span>
                                                        <span class="ride-txt3">{{$orders->trip_cost}}</span>
                                                    </div>	
                                                </div>
                                               
                                                <div class="track-ride mt-32">
                                                    <a href="{{route('trackorder', $orders->id)}}">Track Ride</a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <br>
                                    @endforeach
                                   
                                </div>
                         </div>
                       
                        
                        </div>
			    </div>
		</section>
		<!-- Rides screen content end-->


@endsection