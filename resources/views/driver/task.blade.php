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
                                        <h1>Order Allocation For Drivers</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Order Allocation</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
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
                                              <th >Order Id</th>
                                              <th >From</th>
                                              <th >To</th>
                                              <th >Trip Cost</th>
                                              <th >Time</th>
                                              <th >Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @if($allocated)
                                          @forEach($allocated as $allocated)
                                            <tr>
                                                <td>{{$allocated->order_id}}</td>
                                                <td class="mt-2">{{$allocated->origin}}</td> 
                                                <td>{{$allocated->destination}}</td>
                                                <td>{{$allocated->trip_cost}}</td>
                                                <td>{{$allocated->created_at->diffForHumans()}}</td>
                                                <td>
                                                  <div class="py-2 border-bottom">
                                                    @if($allocated->accepted == 1 || $allocated->accepted == 2 || $allocated->accepted == 3 )
                                                    <button class="btn btn-xs btn-primary" hidden>Accepted</button>
                                                    @else
                                                    <a href="{{route('accept_order', $allocated->id)}}" class="btn btn-xs btn-primary">Accept</a>
                                                    @endif
                                                    @if($allocated->accepted == 2 || $allocated->accepted == 3)
                                                    <button class="btn btn-xs btn-info" hidden>Picked Up</button>
                                                    @else
                                                    <a href="{{route('picked_up', $allocated->id)}}" class="btn btn-xs btn-primary">Pick Up</a>
                                                    @endif
                                                    @if($allocated->accepted == 3)
                                                    <button class="btn btn-xs btn-success" disabled>Delivered</button>
                                                    @else
                                                    <a href="{{route('delivered', $allocated->id)}}" class="btn btn-xs btn-primary">Deliver</a>
                                                    @endif
                                                  </div>
                                                </td>
                                            </tr>
                                            @endforEach
                                            @endif
                                      </tbody>
                                        <tfoot>
                                          <tr>
                                              <th>Order Id</th>
                                              <th>Origin</th>
                                              <th>Destination</th>
                                              <th>Trip Cost</th>
                                              <th>Date</th>
                                              <th>Driver</th>
                                              <th>Action</th>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
@endsection
                                                        
                                                       
                