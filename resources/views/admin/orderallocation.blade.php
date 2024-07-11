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
                                        <h1>All Orders</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">All Orders</li>
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
                                              <th >Date</th>
                                              <th >Driver</th>
                                              <th >Action</th>
                                              <th >Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @if($estimate)
                                          @forEach($estimate as $estimates)
                                            <tr>
                                                <td>{{$estimates->order_id}}</td>
                                                <td class="mt-2">{{$estimates->origin}}</td> 
                                                <td>{{$estimates->destination}}</td>
                                                <td>{{$estimates->trip_cost}}</td>
                                                <td>{{$estimates->created_at->diffForHumans()}}</td>
                                                @if($estimates->driver_id != 0)
                                                <td>{{$estimates->assigned}}</td>
                                                @else
                                                <td>
                                                  <form method="POST" action="/allocated/{{$estimates->order_id}}/{{$estimates->id}}">
                                                    @csrf
                                                    <select class="js-basic-single form-control" name="state" required>
                                                      <optgroup>
                                                        <option>Select Rider</option>
                                                        @forEach($driver as $drivers)
                                                          <option value="{{$drivers->id}}">{{$drivers->name." ".$drivers->last_name}}</option>
                                                          @endforEach
                                                      </optgroup>
                                                  </select>
                
                                                </td>
                                                @endif
                                                @if($estimates->assigned)
                                                <td>
                                                  <div class="py-2 border-bottom">
                                                    <button class="btn btn-xs btn-dark" type="button" disabled>
                                                      Assigned
                                                    </button>
                                                  </div>
                                                </td>
                                                @else
                                                <td>
                                                  <div class="py-2 border-bottom">
                                                    <button class="btn btn-xs btn-success" type="submit">
                                                      Assign Driver
                                                    </button>
                                                  </div>
                                                </td>
                                                @endif
                                              </form>
                                              <td>
                                                @if($estimates->accepted == 1)
                                                <button class="btn btn-xs btn-info" disabled>Accepted</button>
                                                @elseif($estimates->accepted == 2)
                                                <button class="btn btn-xs btn-info" disabled>Picked Up</button>
                                                @elseif($estimates->accepted == 3)
                                                <button class="btn btn-xs btn-success" disabled>Delivered</button>
                                                @else
                                                <button class="btn btn-xs btn-danger" disabled>Pending</button>
                                                @endif
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