@extends('mobilelayouts.drivelayout')

@section('content')


<!-- begin container-fluid -->
<div class="container-fluid">
                       
                        <div class="row">
                            <div class="col-xxl-8 mb-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title">TASK</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th>Booking ID</th>
                                                        <th>Picked Up/ Dropped</th>
                                                        <th>Request Details</th>
                                                        <th>Status </th>
                                                        <th>Fee</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody class="text-muted mb-0">
                                                    <tr>
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
                                                                               
                                                                                 <!--Trip Costs Container Start-->
                                                                                 <div class="border-bottom-primary thin width-48 border-bottom-light-grey">
                                                                                    <div class="text-uppercase trip-fare " style="color:black;text-align:center;">Account Details</div>
                                                                                </div>
                                                                                <div class="trip-fare-container font-weight-light">
                                                                                <div class="trip-fare-item">
                                                                                        <span class="float-left" style="color:black;">Bank Name:</span>
                                                                                        <span class="float-right blue-price" style="color:black;">OPAY</span>
                                                                                        <span class="clearfix"></span>
                                                                                    </div>
                                                                                    <div class="trip-fare-item">
                                                                                        <span class="float-left" style="color:black;">Account Name:</span>
                                                                                        <span class="float-right blue-price" style="color:black;">AHEAD</span>
                                                                                        <span class="clearfix"></span>
                                                                                    </div>
                                                                                    <div class="trip-fare-item">
                                                                                        <span class="float-left" style="color:black;">Account Number</span>
                                                                                        <span class="float-right blue-price" style="color:black;">646490655765</span>
                                                                                        <span class="clearfix"></span>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Accept</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Picked Up</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">delivered</a>
                                                        </td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Accept</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Picked Up</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">delivered</a>
                                                        </td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Accept</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Picked Up</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">delivered</a>
                                                        </td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Accept</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Picked Up</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">delivered</a>
                                                        </td>
                                                        <td>#5290.00</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>#54981</td>
                                                        <td>2017 Audi A4 Prestiger /<br>
                                                            6273 tomas street r14</td>
                                                        <td>View Ride Details</td>
                                                        <td>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Accept</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">Picked Up</a>
                                                        <a href="javascript:void(0);" class="btn btn-xs btn-primary">delivered</a>
                                                        </td>
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