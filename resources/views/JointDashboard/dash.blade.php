@extends('mobilelayouts.layouts')
@section('content')

<div class="col-xs-12 col-sm-12 remaining-height">
        <div class="header-icons-container position-relative text-center" style="background-color: #F0F0F0">
            <span class="float-left back-to-map hidden">
                <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
            </span>
            <h5 class="title">Add Route</h5>
            <a href="/account">
                <span class="float-right closed">
                    <img src="{{asset('mobstyle/icons/mu.svg')}}" alt="Menu Hamburger Icon" style="width: 52px; Height: 52px;">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->
               <!--Google Maps Start-->
               <div id="map-container" class="h-100"></div>
        <div>
            <form id="tripDetailsForm" method="POST" class="rounded-1" action="{{route('order.placed', hash('sha256', (string)auth()->user()->id))}}" style="background-color: #F0F0F0"> 
                @csrf
                <div class="">
                    <div class="request-item-container remaining-height">
                        <div class="all-wide-container history-items-container overflow-scroll-y remaining-height">
                            <div class="history-item driver-request" >
                                <div class="border-bottom-primary">
                                    <div class="status-container status-container-driver">
                                    </div>
                                </div>
                                <div class="margin-top-10 height-auto" id="origin-input-container" style="width: 100%;">
                                    @if(session('success'))
                                        <div class="alert alert-info alert-dismissible fade show" style="width:100%; margin:auto" role="alert">
                                        {{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                @endif
                                <div class="trip-fare-container font-weight-light" style="">
                                    <div class="trip-fare-item">
                                       <span class="float-left" id="trip_text" style="font-weight: bold;" ></span>
                                       <span class="float-right" id="trip_cost_init" style="font-weight: bold;"></span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="trip-fare-item">
                                    <span class="float-left" id="distance_text" style="font-weight: bold;"></span>
                                    <span class="float-right" id="trip-distance-init" style="font-weight: bold;"></span>
                                        <span class="clearfix"></span>
                                    </div>
                                    <div class="trip-fare-item">
                                    <span class="float-left" id="time_text" style="font-weight: bold;"></span>
                                    <span class="float-right" id="trip-time-init" style="font-weight: bold;"></span>
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                                        {{-- <span id="current-location"></span> --}}
                                <div class="w-100 map-input-container map-input-container-top mt-3" style="border: solid 2px; border-radius: 5px; border-color:#F0F0F0; font-weight: 400">
                                    <div class="map-input display-flex">
                                        <input id="location-input" class="form-control" style="font-weight: bold;" type="text" placeholder="Pick Up Location">
                                    </div>
                                </div>
                                <div class="w-100 map-input-container map-input-container-top mt-3" style="border: solid 2px; border-radius: 5px; border-color:#F0F0F0; font-weight: 400">
                                    <div class="map-input display-flex">
                                        <input id="destination-input" class="form-control" style="font-weight: bold;" type="text" placeholder="Enter A Destination Location">
                                    </div>
                                    {{-- <span class="dotted-line-index"></span> --}}
                                </div>
                               
                                <ul id="suggestion-list"></ul>  
                                <div class="w-100 map-input-container map-input-container-bottom mt-3" style="border: solid 2px; border-radius: 5px; border-color: #F0F0F0; font-weight: 400; margin-bottom: 10px;background-color:#F0F0F0">
                                    
                                    <button type="submit" id="button1" class="btn btn-primary rounded-1" style="width: 100% !important;height: 68px;background-color:#f78f33;border-color: #F0F0F0 ;font-size: 23px;font-family: Roboto;font-weight: bold; " ><span style="text-align: center;"><b>Request A Ride</b></span></button>
                                    
                                
                                </div>
                            </div>
                    {{-- <p id="distance"></p> --}}
                        <input type="hidden" id="origin_address" name="origin">
                        <input type="hidden" id="destination_address" name="destination">
                        <input type="hidden" id="trip_distance" name="trip_distance">
                        <input type="hidden" id="trip_time" name="trip_time">
                        <input type="hidden" id="trip_cost" name="trip_cost">
                        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                    
                        </div>  
                </div>
                <!--Tapped Car Information Container End-->      
            </form>
        </div>
</div>
@endsection