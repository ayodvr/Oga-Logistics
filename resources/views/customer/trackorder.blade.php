@extends('mobilelayouts.main')

@section('content')


<!-- Header start -->
<header id="top-header" style="background-color: #F0F0F0">
			<div class="header-wrap">
				<div class="header-back">
					<a href="javascript:history.go(-1)">
						<img src="{{asset('main/assets/svg/back-btn-white-4.svg')}}" alt="back-btn">
					</a>
				</div>
				<div class="header-name">
					<p>Order Status Tracker</p>
				</div>
			</div>
			<div class="boder"></div>
		</header>
		<!-- Header end -->
		<!-- Rides screen content start-->
		<section id="rides-upcoming">
			<div class="rides-upcoming-wrap">
				<h1 class="d-none">Hidden</h1>
				
				<div class="tab-content container" id="pills-tabContent">
                        
                        <div class="tab-pane fade show active" id="history" role="tabpanel" tabindex="0">
                                <div class="ride-active-now-wrap mt-24">
                                
                                    <div class="active-ride-sec">
                                        <p class="ride-time">{{$tracker->created_at}}</p>
                                        <div class="ride-details">
                                        <marquee behavior="slide" direction="left" style="color: red; font-weight:600">Trip duration is subject to change due to traffic and uncertainties</marquee>
                                            <div class="driver-trip-first-sec-wrap">
                                            <div class="card-body">
                                                        <div class=""> <strong>Tracking #:</strong> {{$tracker->tracking}}</div>
                                                        <div class=""> <strong>Shipping From:</strong> {{$tracker->origin}}</div>
                                                        <div class=""> <strong>Shipping To:</strong> {{$tracker->destination}}</div>
                                                        
                                                    </div>
                                            </div>
                                            <div class="boder mt-16"></div>
                                            
                                           
                                            <div class="track">
                                                @if($tracker->accepted == 1 || $tracker->accepted == 2 || $tracker->accepted == 3 )
                                                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                                                @else
                                                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                                                @endif
                                                @if($tracker->accepted == 2 || $tracker->accepted == 3 )
                                                <div class="step active"> <span class="icon"> <i class="fas fa-shipping-fast"></i> </span> <span class="text"> Picked by courier/ On the Way</span> </div>
                                                @else
                                                <div class="step"> <span class="icon"> <i class="fas fa-shipping-fast"></i> </span> <span class="text"> Picked by courier/ On the Way</span> </div>
                                                @endif
                                                {{-- <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div> --}}
                                                @if($tracker->accepted == 3 )
                                                <div class="step active"> <span class="icon"> <i class="fas fa-clipboard-check"></i> </span> <span class="text">Package delivered</span> </div>
                                                @else
                                                <div class="step"> <span class="icon"> <i class="fas fa-clipboard-check"></i> </span> <span class="text">Package delivered</span> </div>
                                                @endif
                                            </div>
                                            <br>
                                            <br>
                                            <div class="">
                                                <div class="boder mt-16"></div>
                                                <div class="ride-more-content mt-16">
                                                    <div>
                                                        <span><img src="{{asset('main/assets/images/rides/icon1-1.svg')}}" alt="icon-img"></span>
                                                        <span class="ride-txt3">{{$tracker->trip_distance}}</span>
                                                    </div>
                                                    <div>
                                                        <span><img src="{{asset('main/assets/images/rides/icon2-1.svg')}}" alt="icon-img"></span>
                                                        <span class="ride-txt3">{{$tracker->trip_time}}</span>
                                                    </div>
                                                    <div>
                                                        <span><img src="{{asset('main/assets/images/rides/naira.svg')}}" alt="icon-img" width="20px" height="20px" ></span>
                                                        <span class="ride-txt3">{{$tracker->trip_cost}}</span>
                                                    </div>	
                                                </div>
                                               
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                 
                                   
                                </div>
                         </div>
                       
                        
                        </div>
			    </div>
		</section>
		<!-- Rides screen content end-->



@endsection