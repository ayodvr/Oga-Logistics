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
            <span>Tracking</span>
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
                    <br>
                    <marquee behavior="slide" direction="left" style="color: red; font-weight:600">Trip duration is subject to change due to traffic and uncertainties</marquee>
                    <div class="card-body">
                        <h6>Order ID: {{$tracker->order_id}}</h6>
                        <article class="card">
                            <div class="card-body row">
                                <div class="col"> <strong>Shipping From:</strong> <br>{{$tracker->origin}}</div>
                                <div class="col"> <strong>Shipping To:</strong> <br>{{$tracker->destination}}</div>
                                <div class="col"> <strong>Estimated Delivery By:</strong> <br>{{$tracker->trip_time}}</div>
                                <div class="col"> <strong>Tracking #:</strong> <br>{{$tracker->tracking}}</div>
                            </div>
                        </article>
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
                        <hr>
                    
                        <a href="{{route('orderhistory')}}" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
                    </div>
                </article>
            </div>



        </div>
</div>

    



@endsection@extends('mobilelayouts.layouts')

@section('content')



<div class="col-xs-12 col-sm-12">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
            <a href="/dashboard">
                <span class="float-left">
                    <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
            <span>Tracking</span>
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
        <br>
        <marquee behavior="slide" direction="left" style="color: red; font-weight:600">Trip duration is subject to change due to traffic and uncertainties</marquee>
        <div class="card-body">
            <h6>Order ID: {{$tracker->order_id}}</h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Shipping From:</strong> <br>{{$tracker->origin}}</div>
                    <div class="col"> <strong>Shipping To:</strong> <br>{{$tracker->destination}}</div>
                    <div class="col"> <strong>Estimated Delivery By:</strong> <br>{{$tracker->trip_time}}</div>
                    <div class="col"> <strong>Tracking #:</strong> <br>{{$tracker->tracking}}</div>
                </div>
            </article>
            <div class="track">
                @if($tracker->accepted == 1 || $tracker->accepted == 2 || $tracker->accepted == 3 )
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                @else
                <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                @endif
                @if($tracker->accepted == 2 || $tracker->accepted == 3 )
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                @else
                <div class="step"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                @endif
                {{-- <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div> --}}
                @if($tracker->accepted == 3 )
                <div class="step active"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Package delivered</span> </div>
                @else
                <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Package delivered</span> </div>
                @endif
            </div>
            <hr>
           
            <a href="{{route('orderhistory')}}" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
        </div>
    </article>
</div>



        </div>
</div>

    



@endsection