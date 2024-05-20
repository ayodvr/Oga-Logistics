@extends('mobilelayouts.drivelayout')

@section('content')


<!-- begin container-fluid -->
<div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Summary</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Dashboard
                                                </li>
                                                
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start car dealer-->
                        <div class="row">
                            <div class="col-sm-12 col-xxl-3 mb-30">
                                <div class="card card-statistic car-dealer-contants h-100 mb-0 o-hidden">
                                    <div class="card-body p-0">
                                        
                                        <div class="row no-gutters">
                                            <div class="col-xxs-6">
                                                <div class="media align-items-center p-4 border-sm-right border-bottom">
                                                    <div class="mr-4">
                                                        <i class="fe fe-user-check text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">Total No Of Rides</strong>
                                                        <h3 class="font-light text-muted mb-0">528+</h3>
                                                    </div>
                                                </div>
                                                <div class="media align-items-center p-4 border-sm-right border-bottom border-sm-bottom-0">
                                                    <div class="mr-4">
                                                        <i class="fe fe-x-square text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">Cancelled Rides</strong>
                                                        <h3 class="font-light text-muted mb-0">15K+</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxs-6">
                                                <div class="media align-items-center p-4 border-bottom">
                                                    <div class="mr-4">
                                                        <i class="fe fe-check-square text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">Completed Rides</strong>
                                                        <h3 class="font-light text-muted mb-0">156+</h3>
                                                    </div>
                                                </div>
                                                <div class="media align-items-center p-4">
                                                    <div class="mr-4">
                                                        <i class="fe fe-activity text-primary font-30"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong class="text-dark">Over All Charged Fee</strong>
                                                        <h3 class="font-light text-muted mb-0">87%</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-xxl-8 mb-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title">Ride History</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Booking ID</th>
                                                        <th>Picked Up/ Dropped</th>
                                                        <th>Request Details</th>
                                                        <th>Dated On</th>
                                                        <th>Status </th>
                                                        <th>Charged Fee</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted mb-0">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td><a href="#openModal">View Ride Details</a>
                                                            <div id="openModal" class="modalDialog">
                                                                <div>	<a href="#close" title="Close" class="close">X</a>
                                                                    <div class="all-history-items remaining-height">
                                                                        <div class="history-items-container trip-history">
                                                                            <div class="history-item">
                                                                                <div><span class="label-title font-20">Booking ID:</span> <span class="font-20">HD345</span></div>
                                                                                
                                                                                <!--Date & Time Container Start-->
                                                                                <div class="border-bottom-primary thin">
                                                                                    <div class="status-container">
                                                                                        <div class="date float-left">
                                                                                            <img src="{{asset('mobstyle/icons/calendar-dark.svg')}}" alt="Calendar Icon" class="calendar-icon"> 29 April
                                                                                        </div>
                                                                                        <div class="status-none float-right text-uppercase">
                                                                                            <span class="fas fa-clock font-weight-light font-20"></span> 16:12
                                                                                        </div>
                                                                                        <div class="clearfix"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <!--Date & Time Container End-->

                                                                                <!--Address Container Start-->
                                                                                <div class="addresses-container position-relative">
                                                                                    <div class="height-auto">
                                                                                        <div class="w-100 map-input-container map-input-container-top">
                                                                                            <span class="fas fa-location-arrow location-icon-rotate map-input-icon"></span>
                                                                                            <div class="map-input display-flex">
                                                                                                <input class="controls flex-1 font-weight-light font-20" type="text"
                                                                                                    placeholder="Enter an origin location" value="555 Middlefield Rd" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                        <a href="trip-description.html" class="href-decoration-none">
                                                                                            <div class="w-100 map-input-container map-input-container-bottom">
                                                                                                <span class="map-input-icon"><img src="{{asset('mobstyle/icons/circle.svg')}}"  alt="Current Location Icon"></span>
                                                                                                <div class="map-input display-flex border-0 controls flex-1 font-weight-light align-items-center font-20" style="color:black;">
                                                                                                    Palo Alto
                                                                                                </div>
                                                                                                <span class="dotted-line"></span>
                                                                                            </div>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            

                                                                                <!--Trip Costs Container Start-->
                                                                                <div class="border-bottom-primary thin width-48 border-bottom-light-grey">
                                                                                    <div class="text-uppercase trip-fare" style="color:black;">Trip Fare</div>
                                                                                </div>

                                                                                <div class="trip-fare-container font-weight-light">
                                                                                <div class="trip-fare-item">
                                                                                        <span class="float-left" style="color:black;">Payment method</span>
                                                                                        <span class="float-right blue-price" style="color:black;">Transfer</span>
                                                                                        <span class="clearfix"></span>
                                                                                    </div>
                                                                                    <div class="trip-fare-item">
                                                                                        <span class="float-left" style="color:black;">Total Paid Amount</span>
                                                                                        <span class="float-right blue-price" style="color:black;">$14.30</span>
                                                                                        <span class="clearfix"></span>
                                                                                    </div>
                                                                                </div>
                                                                                <!--Trip Costs Container End-->

                                                                            

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>02/13/2024</td>
                                                        <td><span class="badge badge-success-inverse">Completed</span></td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>02/13/2024</td>
                                                        <td><span class="badge badge-success-inverse">Completed</span></td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>02/13/2024</td>
                                                        <td><span class="badge badge-success-inverse">Completed</span></td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>02/13/2024</td>
                                                        <td><span class="badge badge-success-inverse">Completed</span></td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>02/13/2024</td>
                                                        <td><span class="badge badge-success-inverse">Completed</span></td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    <!-- end container-fluid -->


@endsection