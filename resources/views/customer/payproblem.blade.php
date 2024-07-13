@extends('mobilelayouts.layouts')
@section('content')

<div class="col-xs-12 col-sm-12">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
            <a href="/support">
                <span class="float-left">
                    <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
            <span>Payment Problems</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">
            <div class="text-center header-icon-logo-margin">
            <img style="width: 280px;height: auto;margin-bottom: 0px;" src="{{asset('log/images/log2.png')}}" alt="Ogaglobal Logistics">
            </div>
            <div class="address-title">Payment Problem</div>

            <!--Information Container Start-->
            <div class="border-bottom-primary">
                <div class="support-description-text font-weight-light">
                    Please provide a detailed description of any issues you are experiencing with our payment method. Our team is ready to assist you promptly.
                </div>
            </div>
            <!--Information Container End-->

            <!--Comment Container Start-->
            <div class="comment-info comment-info-margin">
                <span class="comment-label"> * </span> Problem Description
                <textarea class="w-100"></textarea>
                <a href="/support" class="btn btn-primary text-uppercase" style="background-color:#f78f33">Send Message <span class="fas fa-paper-plane plus-icon"></span></a>
            </div>
            <!--Comment Container End-->

        </div>
    </div>



@endsection