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
                                        <h1>Admin Dashboard</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                                </li>
                                               
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Home</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- start real estate contant -->
                        <div class="row">
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0 bg-pink">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">{{$all_orders}}</h2>
                                        <p class="text-white">Orders</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0 bg-primary">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">{{$accepted}}</h2>
                                        <p class="text-white">Assigned</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0 bg-info">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">{{$picked_up}}</h2>
                                        <p class="text-white">Picked Up</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-xxl-3 m-b-30">
                                <div class="card card-statistics h-100 m-b-0 bg-orange">
                                    <div class="card-body">
                                        <h2 class="text-white mb-0">{{$delivered}}</h2>
                                        <p class="text-white">Delivered</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xxl-12 m-b-30">
                                <div class="card card-statistics dating-contant h-100 mb-0">
                                    <div class="card-header">
                                        <h4 class="card-title"></h4>
                                    </div>
                                    <div class="card-body">
                                      <div class="datatable-wrapper table-responsive">
                                        <table
                                          id="datatable"
                                          class="display compact table table-striped table-bordered"
                                        >
                                          <thead>
                                            <tr>
                                                <th class="hidden-column">Id</th>
                                                <th >Order Id</th>
                                                <th >From</th>
                                                <th >To</th>
                                                <th >Trip Cost</th>
                                                <th >Trip Duration</th>
                                                <th >Date</th>
                                                <th >Status</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @forEach($estimate as $estimates)
                                              <tr>
                                                  <td class="hidden-column">{{$estimates->id}}</td>
                                                  <td>{{$estimates->order_id}}</td>
                                                  <td class="mt-2">{{$estimates->origin}}</td> 
                                                  <td>{{$estimates->destination}}</td>
                                                  <td>{{$estimates->trip_cost}}</td>
                                                  <td>{{$estimates->trip_time}}</td>
                                                  <td>{{$estimates['created_at']->toFormattedDateString()}}</td>
                                                <td>
                                                  @if($estimates->accepted == 1)
                                                  <button class="btn btn-xs btn-dark" disabled>Assigned</button>
                                                  @elseif($estimates->accepted == 2)
                                                  <button class="btn btn-xs btn-dark" disabled>Picked Up</button>
                                                  @elseif($estimates->accepted == 3)
                                                  <button class="btn btn-xs btn-success" disabled>Delivered</button>
                                                  @else
                                                  <button class="btn btn-xs btn-danger" disabled>Pending</button>
                                                  @endif
                                                </td>
                                              </tr>
                                              @endforEach
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Origin</th>
                                                <th>Destination</th>
                                                <th>Trip Cost</th>
                                                <th>Trip Duration</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                          </tfoot>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                     
                        <!-- end real estate contant -->
                    </div>
                    <!-- end container-fluid -->

@endsection