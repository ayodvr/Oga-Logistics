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
            <span>Online Support</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin">
                <div class="profile-picture-container">
                    <img style="width: 280px;height: auto;margin-bottom: 0px;" src="{{asset('log/images/log2.png')}}" alt="Ogaglobal Logistics">
                </div>
            </div>
            <div class="address-title">Online Support</div>

            <!--Support Topic Items Container Start-->
            <div class="sign-up-form-container">
                <div class="width-100">

                    <!--Support Topic Item Start-->
                    <div class="border-bottom-primary">
                        <a href="/payproblem" class="home-options-list href-decoration-none">
                            <span>Payment Problems</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Support Topic Item End-->

                    <!--Support Topic Item Start-->
                    <div class="border-bottom-primary">
                        <a href="/driverproblem" class="home-options-list href-decoration-none">
                            <span>Report Driver</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Support Topic Item End-->

                   

                    <!--Support Topic Item Start-->
                    <div class="border-bottom-primary">
                        <a href="/arrivalproblem" class="home-options-list href-decoration-none">
                            <span>Report Arrival/Departure Problems</span>
                            <span class="fas fa-check icon chosen hidden"></span>
                            <span class="icon choose float-right">
                                <img src="{{asset('mobstyle/icons/angle-right.svg')}}" alt="Angle Right Icon">
                            </span>
                        </a>
                    </div>
                    <!--Support Topic Item End-->

                  

                </div>
            </div>
            <!--Support Topic Items Container End-->

        </div>
    </div>

@endsection