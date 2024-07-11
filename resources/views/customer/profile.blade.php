@extends('mobilelayouts.dash')

@section('content')



<div class="col-xs-12 col-sm-12">

        <!--Page Title & Icons Start-->
        <div class="header-icons-container text-center">
            <a href="/dashboard">
                <span class="float-left">
                    <img src="{{asset('mobstyle/icons/back.svg')}}" alt="Back Icon">
                </span>
            </a>
            <span>Profile</span>
            <a href="#">
                <span class="float-right menu-open closed">
                    <img src="{{asset('mobstyle/icons/menu.svg')}}" alt="Menu Hamburger Icon">
                </span>
            </a>
        </div>
        <!--Page Title & Icons End-->

        <div class="rest-container">

            <!--Profile Information Container Start-->
            <div class="text-center header-icon-logo-margin">
                <div class="profile-picture-container">
                    <img src="{{asset('mobstyle/images/avatar.svg')}}" alt="Profile Picture">
                    <span class="fas fa-camera">
                         <input class="file-prompt" type="file" accept="image/*">
                    </span>
                </div>
                <div class="display-flex flex-column">
                    <span class="profile-name">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</span>
                    <span class="profile-email font-weight-light">{{ Auth::user()->email }}</span>
                </div>
            </div>
            <!--Profile Information Container End-->

            <!--Profile Information Fields Container Start-->
            <div class="sign-up-form-container text-center">
                <form class="width-100">

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span><img src="{{asset('mobstyle/icons/phone.svg')}}" alt="Phone Number"></span>
                            </div>
                            <input class="form-control" type="tel" name="phone" placeholder="Mobile Phone Number">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/avatar-light.svg')}}" alt="Avatar Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="full-name" placeholder="Full Name">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/envelope.svg')}}" alt="Envelope Icon">
                                </span>
                            </div>
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="country" placeholder="Country">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="city" placeholder="City">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="address" placeholder="Address">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                               <span>
                                    <img src="{{asset('mobstyle/icons/marker.svg')}}"  alt="Marker Icon">
                                </span>
                            </div>
                            <input class="form-control" type="text" autocomplete="off" name="zip" placeholder="Zip Code">
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/lock.svg')}}" alt="Lock Icon">
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Password">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="{{asset('mobstyle/icons/eye.svg')}}" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <!--Profile Field Container Start-->
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span>
                                    <img src="{{asset('mobstyle/icons/lock.svg')}}" alt="Lock Icon">
                                </span>
                            </div>
                            <input class="form-control" type="password" name="password" placeholder="Confirm Password">
                            <div class="input-group-append password-visibility">
                                <span>
                                    <img src="{{asset('mobstyle/icons/eye.svg')}}" alt="Password Visibility Icon">
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--Profile Field Container End-->

                    <div class="form-submit-button">
                        <a href="index.html" class="btn btn-dark text-uppercase ">Save <span class="far fa-save margin-left-10"></span></a>
                    </div>
                </form>
            </div>
            <!--Profile Information Fields Container End-->

        </div>
    </div>

    <!--Terms And Conditions Agreement Container Start-->
    <div class="col-xs-12 col-sm-12 text-center sms-rate-text font-roboto flex-end margin-bottom-30">
        <div class="container-sms-rate-text width-100 font-11">
            <span class="light-gray font-weight-light">By signing up you have agreed to our </span>
            <br/>
            <a href="#" class="dark-link">
                <span class="font-weight-light">Terms of Use & Privacy Policy</span>
            </a>
        </div>
    </div>
    <!--Terms And Conditions Agreement Container End-->




@endsection