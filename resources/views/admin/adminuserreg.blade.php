@extends('mobilelayouts.master')
@section('content')


<!-- begin container-fluid -->
<div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Create New Admin User Account</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Home
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Admin User</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                       <!-- start Validation row -->
                       <div class="row formavlidation-wrapper">
                          
                            <div class="col-xl-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title"></h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form id="signupForm1" method="post" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="control-label" for="firstname1">First name</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="lastname1">Last name</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="username1">Phone Number</label>
                                                <div class="mb-2">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile Number" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="email1">Email</label>
                                                <div class="mb-2">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label class="control-label" for="password1">Password</label>
                                                <div class="mb-2">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="confirm_password1">Confirm password</label>
                                                <div class="mb-2">
                                                    <input type="password" class="form-control" id="confirm_password1" name="confirm_password1" placeholder="Confirm password" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Create Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Validation row  -->

                    </div>
                    <!-- end container-fluid -->


                    

@endsection