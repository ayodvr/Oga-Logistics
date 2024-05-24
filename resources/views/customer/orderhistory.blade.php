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
        <div class="all-history-items remaining-height">
                <div class="history-items-container trip-history">
                    <div class="history-item">
                        <div><span class="label-title">Tracking ID:</span> <span class="font-13">HD345</span></div>
                        <!--Date & Time Container Start-->
                        <div class="border-bottom-primary thin">
                            <div class="status-container">
                                <div class="date float-left">
                                    <img src="{{asset('mobstyle/icons/calendar-dark.svg')}}" alt="Calendar Icon" class="calendar-icon"> 29 April
                                </div>
                                <div class="status-none float-right text-uppercase">
                                    <span class="fas fa-clock font-weight-light"></span> 16:12
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--Address Container Start-->
                        <div class="addresses-container position-relative">
                            <div class="height-auto">
                                <div class="w-100 map-input-container map-input-container-top">
                                    <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                    <div class="map-input display-flex">
                                        <input class="controls flex-1 font-weight-light" type="text"
                                               placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                    </div>
                                </div>
                                <a href="trip-description.html" class="href-decoration-none">
                                    <div class="w-100 map-input-container map-input-container-bottom">
                                        <span class="map-input-icon"><img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                                        <div class="map-input display-flex border-0 controls flex-1 font-weight-light align-items-center">
                                            Palo Alto
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
                            <div class="text-uppercase trip-fare">Trip Fare</div>
                        </div>

                        <div class="trip-fare-container font-weight-light">
                            <div class="trip-fare-item">
                                <span class="float-left">Cash</span>
                                <span class="float-right blue-price">$12.30</span>
                                <span class="clearfix"></span>
                            </div>
                            
                            <div class="trip-fare-item">
                                {{-- <span class="float-left">Track Order</span> --}}
                                <br>
                                <button class="btn btn-xs btn-dark float-right">Track Order</button>
                                <span class="clearfix"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</div>
@endsection