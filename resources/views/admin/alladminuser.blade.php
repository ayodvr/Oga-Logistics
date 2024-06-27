@extends('mobilelayouts.admin')

@section('content')

<div class="col-xs-12 col-sm-12 remaining-height">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
        <a href="/manageadminuser">
                <span class="float-left">
                    <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
            <span class="title">List Of All Admin User</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons Start-->
        <div class="rest-container">

            <div class="all-wide-container trip-history-driver-container">
                <div class="all-transactions-container">
                    <div class="all-transaction-labels font-roboto ">
                        All Admin User
                        <span class="label-title view-all float-right">View All</span>
                    </div>

                    <!--All Withrdaw History Listing Container Start-->
                    <div class="all-sales-history-items">

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/mastercard.svg')}}" alt="Mastercard Icon">
                            </div>
                            <div class="width-100">
                                <div>30/09/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #6205422</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$150.32</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/paypal.svg')}}" alt="Paypal Icon">
                            </div>
                            <div class="width-100">
                                <div>11/07/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #6832111</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$141.50</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/ic_bank.svg')}}" alt="Bank Transfer Icon">
                            </div>
                            <div class="width-100">
                                <div>16/05/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #SDA8673DA</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$222.40</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/mastercard.svg')}}" alt="Mastercard Icon">
                            </div>
                            <div class="width-100">
                                <div>17/04/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #GH2342343</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$413.45</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/paypal.svg')}}" alt="Paypal Icon">
                            </div>
                            <div class="width-100">
                                <div>16/03/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #12313677ASREA</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$122.97</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/paypal.svg')}}" alt="Paypal Icon">
                            </div>
                            <div class="width-100">
                                <div>16/02/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #54353111</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$122.37</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/ic_bank.svg')}}" alt="Bank Transfer Icon">
                            </div>
                            <div class="width-100">
                                <div>11/02/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #876834523</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$1442.30</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->

                        <!--Withrdaw History Item Container Start-->
                        <div class="display-flex align-items-center sales-history-item">
                            <div class="all-wide-container">
                                <img src="{{asset('mobstyle/icons/ic_bank.svg')}}" alt="Bank Transfer Icon">
                            </div>
                            <div class="width-100">
                                <div>01/01/2018</div>
                                <div class="order-num-container"><span class="label-title font-11 font-roboto">Order #23456KAJSD</span></div>
                            </div>
                            <div class="float-right">
                                <div class="blue-price text-right">$3112.30</div>
                            </div>
                        </div>
                        <!--Withrdaw History Item Container End-->
                    </div>
                    <!--All Withrdaw History Listing Container End-->

                </div>

                <!--Load More Button Start-->
                <div class="load-more">
                    <button type="button" class="btn btn-dark text-uppercase load-more">Load More</button>
                </div>
                <!--Load More Button End-->

            </div>

        </div>
    </div>

@endsection
