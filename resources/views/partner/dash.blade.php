@extends('JointDashboard.dash')

@section('content')

<div class="col-xs-12 col-sm-12 remaining-height">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container position-relative text-center">
            <span class="float-left back-to-map hidden">
                <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
            </span>
            <span class="title">Add Route</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        
        <!--Page Title & Icons End-->
               <!--Google Maps Start-->
               <div id="map-container" class="h-100"></div>

               <!--Tapped Car Information Container Start-->;
    <form id="tripDetailsForm" method="POST" action="{{route('order.placed', hash('sha256', (string)auth()->user()->id))}}"> 
        @csrf
        <div class="">
            <div class="request-item-container remaining-height">
                <div class="all-wide-container history-items-container overflow-scroll-y remaining-height">
                    <div class="history-item driver-request">
                        <div class="border-bottom-primary">
                            <div class="status-container status-container-driver">
                            </div>
                        </div>
                        <div class="margin-top-10 height-auto" id="origin-input-container">
                {{-- <span id="current-location"></span> --}}
                <div class="w-100 map-input-container map-input-container-top mt-3" style="border: solid 2px; border-radius: 5px; border-color: #c4c0c0; font-weight: 400">
                    <span class="map-input-icon"><img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                    <div class="map-input display-flex">
                        <input id="location-input" class="controls flex-1" type="text" placeholder="    Pick up location">
                    </div>
                </div>
                <div class="w-100 map-input-container map-input-container-bottom mt-3" style="border: solid 2px; border-radius: 5px; border-color: #c4c0c0; font-weight: 400">
                    <span class="map-input-icon"><img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                    <div class="map-input display-flex">
                        <input id="destination-input" class="controls flex-1" type="text" placeholder="    Enter a destination location" required>
                    </div>
                    {{-- <span class="dotted-line-index"></span> --}}
                </div>
                <ul id="suggestion-list"></ul>  
            </div>
            {{-- <p id="distance"></p> --}}
            <div class="payment-options">
                <div class="default-payment-method-container display-flex">
                    <div class="about-section display-flex">
                        <div>
                            <div class="trip-fare-container trip-fare-driver font-weight-light">
                                <!--Trip Fare Item Start-->
                                <div class="trip-fare-item">
                                    {{-- <span class="float-left">Estimate Price</span> --}}
                                    <span id="trip_cost_init"></span>
                                </div>
                                <!--Trip Fare Item End-->
                                <div class="trip-fare-item">
                                    {{-- <span class="float-left">Distance</span> --}}
                                    <span id="trip-distance-init"></span>
                                </div>
                                <!--Trip Fare Item End-->
                                <div class="trip-fare-item">
                                    {{-- <span class="float-left">Time</span> --}}
                                    <span id="trip-time-init"></span>
                                </div>
                                <!--Trip Fare Item End-->
                            </div>
                        </div>
                    </div>
                    {{-- <div style="display:flex">
                        <h5 id="trip-distance"></h5>
                        <h5 id="trip-time"></h5>
                        <h5 id="trip-cost"></h5>
                    </div>
                </div> --}}
            </div>
                <input type="hidden" id="origin_address" name="origin">
                <input type="hidden" id="destination_address" name="destination">
                <input type="hidden" id="trip_distance" name="trip_distance">
                <input type="hidden" id="trip_time" name="trip_time">
                <input type="hidden" id="trip_cost" name="trip_cost">
                <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
            <div style="margin-top: 10px">
                <button type="submit" id="button1" class="btn btn-primary" style="width:100%;background-color:#f78f33;">Request a Ride</button>
            </div>
            </div>
            
        </div>
        <!--Tapped Car Information Container End-->


             
    </div>
</form>
@endsection