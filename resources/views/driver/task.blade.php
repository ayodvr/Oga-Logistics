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
                              <button class="btn btn-xs btn-primary" disabled>Accepted</button>
                              @else
                              <a href="{{route('accept_order', $allocated->id)}}" class="btn btn-xs btn-primary">Accept</a>
                              @endif
                              @if($allocated->accepted == 2 || $allocated->accepted == 3)
                              <button class="btn btn-xs btn-info" disabled>Picked Up</button>
                              @elseif($allocated->accepted == null)
                              <a class="btn btn-xs btn-primary text-white" disabled>Pick Up</a>
                              @else
                              <a href="{{route('picked_up', $allocated->id)}}" class="btn btn-xs btn-primary">Pick Up</a>
                              @endif
                              @if($allocated->accepted !== 2 )
                              <a class="btn btn-xs btn-primary text-white" disabled>Deliver</a>
                              @elseif($allocated->accepted == 2)
                              <button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#verticalCenter">Deliver</button>
                              {{-- <a href="{{route('delivered', $allocated->id)}}" data-toggle="modal" data-target="#verticalCenter" class="btn btn-xs btn-primary">Deliver</a> --}}
                              @else
                              <button class="btn btn-xs btn-success" disabled>Delivered</button>
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

<div class="modal fade" id="verticalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="verticalCenterTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <p>Please pay in to the account number below</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Save changes</button>
          </div>
      </div>
  </div>
</div>
@endsection
                                                        
                                                       
                