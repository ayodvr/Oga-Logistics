@extends('mobilelayouts.layouts')
@section('content')

<div class="col-xs-12 col-sm-12">
    <!--Page Title & Icons Start-->
    <div class="header-icons-container text-center">
        <a href="/dashboard">
            <span class="float-left">
                <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
            </span>
        </a>
        <span>Order History</span>
        <a href="#">
            <span class="float-right menu-open closed">
                <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
            </span>
        </a>
    </div>
        
    <div class="rest-container">
        @foreach($orders as $orders)
        <div class="all-history-items remaining-height">
            <div class="history-items-container trip-history">
                <div class="history-item">
                    <div><span class="label-title" style="color: black">Tracking ID:</span> <span style="color: black">{{$orders->tracking}}</span></div>
                    <br>
                    <div class="addresses-container position-relative">
                        <div class="height-auto">
                            <div class="w-100 map-input-container map-input-container-top">
                                <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                <div class="map-input display-flex">
                                    <input class="controls flex-1" type="text"
                                        placeholder="Enter an origin location" style="color: black" value="{{$orders->origin}}" disabled>
                                </div>
                            </div>
                            <a class="href-decoration-none">
                                <div class="w-100 map-input-container map-input-container-bottom">
                                    <span class="map-input-icon"><img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                                    <div class="map-input display-flex border-0 controls flex-1 align-items-center" style="color: black">
                                        {{$orders->destination}}
                                    </div>
                                    <span class="dotted-line"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--Address Container End-->
                    <br>
                    <!--Trip Costs Container Start-->
                    <div class="border-bottom-primary thin width-48 border-bottom-light-grey">
                        <div class="text-uppercase trip-fare" style="color: black">Trip Fare</div>
                    </div>

                    <div class="trip-fare-container font-weight-light">
                        <div class="trip-fare-item">
                            <span class="float-left" style="color: black">Cost</span>
                            <span class="float-right black-price" style="color: black">${{$orders->trip_cost}}</span>
                            <span class="clearfix"></span>
                        </div>
                        
                        <div class="trip-fare-item">
                            {{-- <span class="float-left">Track Order</span> --}}
                            <br>
                            <a href="{{route('trackorder', $orders->id)}}" class="btn btn-xs btn-dark float-right" type="submit">Track Order</a>
                            <span class="clearfix"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection