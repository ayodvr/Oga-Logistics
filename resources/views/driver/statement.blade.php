@extends('mobilelayouts.master')
@section('content')

<div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="d-block d-sm-flex flex-nowrap align-items-center">
                <div class="page-title mb-2 mb-sm-0">
                    <h1>Driver History</h1>
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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Driver History</li>
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
                            <th>Order ID</th>
                            <th>Driver Name</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Trip Date</th>
                            <th>Status </th>
                            <th>Amount Charged</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($drivers)
                    @foreach($drivers as $driver)
                        <tr>
                            <td>{{$driver->order_id}}</td>
                            <td>{{$driver->assigned}}</td>
                            <td>{{$driver->origin}}</td>
                            <td>{{$driver->destination}}</td>
                            <td>{{$driver['created_at']->toDayDateTimeString()}}</td>
                            @if($driver->delivered == null )
                            <td><span class="badge badge-danger-inverse">pending</span></td>
                            @else
                            <td><span class="badge badge-success-inverse">Completed</span></td>
                            @endif
                            <td>${{$driver->trip_cost}}</td>
                        </tr>
                    @endforEach
                    @endif
                  </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Booking ID</th>
                            <th>Picked Up/ Dropped</th>
                            <th>Request Details</th>
                            <th>Dated On</th>
                            <th>Status </th>
                            <th>Amount Charged</th>
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