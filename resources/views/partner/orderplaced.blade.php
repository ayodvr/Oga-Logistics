@extends('mobilelayouts.track')
@section('content')
<div class="col-xs-12 col-sm-12">
    <!--Page Title & Icons Start-->
    <div class="header-icons-container text-center">
        <a href="/dashboard">
            <span class="float-left">
                <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
            </span>
        </a>
        <span>Order Summary</span>
        <a href="#">
            <span class="float-right menu-open closed">
                <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
            </span>
        </a>
    </div>
    <!--Page Title & Icons End-->
        <div class="rest-container">
        <div class="container">
            <article class="card">
       
        <div class="card-body">
            {{-- <h6>Order ID: {{$summary->order_id}}</h6> --}}
            <!--Successful Verification Information Start-->
            <div class="text-center header-icon-logo header-icon-logo">
                <img src="{{asset('mobstyle/icons/verified.svg')}}" alt="Verification Successful">
            </div>
            <div class="verification-text">
                Awesome!
            </div>
            <div class="all-container text-center font-weight-light">
                Your order has been initiated, Rider will be in touch with you shortly.
            </div>
            <br>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Shipping From:</strong> <br>{{$summary->origin}}</div>
                    <div class="col"> <strong>Shipping To:</strong> <br>{{$summary->destination}}</div>
                    <div class="col"> <strong>Estimated Delivery In:</strong> <br>{{$summary->trip_time}}<br>(Subject to change due to traffic or unforseen circumstances)</div>
                    <div class="col"> <strong>Tracking #:</strong> <br>{{$summary->tracking}}</div>
                </div>
            </article>
            <hr>
            <div>
                <!--Successful Verification Information End-->
                <div class="sign-up-form-container text-center">
                    <form class="width-100">
                        <div class="form-submit-button">
                            <a href="{{route('declined', $summary->id)}}" class="btn btn-primary font-weight-light text-uppercase">Cancel Ride</a>
                        </div>
                    </form>
                    <form class="width-100">
                        <div class="form-submit-button">
                            <a href="/trackorder/{{$summary->id}}" class="btn btn-primary font-weight-light text-uppercase">Track Progress</a>
                        </div>
                    </form>
                </div>
                <!--Login Button End-->
            </div>
        </div>
    </article>
</div>



        </div>
</div>
@endsection