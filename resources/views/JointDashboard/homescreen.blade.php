@extends('mobilelayouts.taxi')
@section('content')

<section  class="going1-screen">
    <div class="homescreen-wrap">
        <h1 class="d-none">Hidden</h1>
        <h2 class="d-none">Cancel rides</h2>
        <div class="header-sec">
            <div class="header-sec-wrap">
                <div class="header-setting">
                    <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button">
                    <img src="{{asset('mobstyle/icons/mu.svg')}}" alt="Menu Hamburger Icon" style="width: 40px; Height: 40px;">
                    </a>
                </div>
                
            </div>
        </div>
        <div>
            <div id="map-container"></div>
        </div>
        <div class="homescree-bottom-sec">
            <div class="homescree-bottom-sec-wrap going1-bottom">
                @if(session('success'))
                                        <div class="alert alert-info alert-dismissible fade show" style="width:100%; margin:auto" role="alert">
                                        {{session('success')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                @endif
                <div class="tab-pane" id="car1" role="tabpanel"  tabindex="0">
                    <div class="select-car mt-24">
                        <div class="ride-more-content">
                            <div class="going8-content">
                                <span><img src="{{asset('main/assets/images/rides/icon1.svg')}}" alt="icon-img"></span>
                                <span class="ride-txt3" id="trip-distance-init"></span>
                            </div>
                            <div  class="going8-content" hidden>
                                <span><img src="{{asset('main/assets/images/rides/icon2.svg')}}" alt="icon-img"></span>
                                <span class="ride-txt3" id="trip-time-init"></span>
                            </div>
                            <div  class="going8-content">
                                <span><img src="{{asset('main/assets/images/rides/icon3.svg')}}" alt="icon-img"></span>
                                <span class="ride-txt3" id="trip-cost"></span>
                            </div>	
                        </div> 
                    </div>
                </div>
                <div class="going1-details mt-16">
                    {{-- <label class="pickup-lbl">Pickup</label> --}}
                    <div class="pickup">
                        <input id="location-input" class="enter-txt" type="text" placeholder="Enter Pickup">
                        <span id="clear-location" style="display: none;margin-right:10px">&#x2715;</span>
                    </div>
                </div>
                <button id="use-current-location" type="button" class="btn btn-primary mt-2"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  Use Current Location as Pickup
</button>
    <div id="current-location" hidden></div>
                <div class="going1-details mt-16">
                    {{-- <label class="pickup-lbl">drop off</label> --}}
                    <div class="pickup">
                        <input id="destination-input" class="enter-txt" type="text" placeholder="Enter Destination">
                    </div>
                </div>
 <form id="tripDetailsForm" method="POST" class="rounded-1" action="{{route('order.placed', hash('sha256', (string)auth()->user()->id))}}" style="background-color: #F0F0F0"> 
                @csrf
        <input type="hidden" name="origin" id="hidden-origin" />
        <input type="hidden" name="destination" id="hidden-destination" />
        <input type="hidden" name="trip_time" id="hidden-trip-time" />
        <input type="hidden" name="trip_distance" id="hidden-trip-distance" />
        <input type="hidden" name="trip_cost" id="hidden-trip-cost" />
        <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                <div class="going1-next-btn mt-32">
                    <div class="d-grid gap-2 col-11 mx-auto">
                      <button id="start-movement" class="btn btn-warning text-white" style="background-color:#fd6420" type="submit" disabled>Proceed</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>	
</section>
@endsection