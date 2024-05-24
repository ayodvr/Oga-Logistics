@extends('mobilelayouts.master')

@section('content')
  <!-- begin container-fluid -->
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        @if($count)
          <div
            class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
            role="alert"
          >
            <strong>Hey! Rider</strong> You have {{$count}} pending order(s) to attend to
            <button
              type="button"
              class="close"
              data-dismiss="alert"
              aria-label="Close"
            >
              <i class="ti ti-close"></i>
            </button>
          </div>
          @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-6 col-xxl-4">
                    <div class="card card-statistics">
                        <div class="card card-statistics h-100 mb-0">
                            <div class="card-header">
                                <h4 class="card-title">Ride overview</h4>
                            </div>
                            <div class="card-body p-30">
                                <div class="row">
                                    <div class="col-xxs-6 h-100 p-2 border-right border-bottom border-xxs-right-0">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="p-3 text-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-primary"><i class="fe fe-settings"></i></a>
                                                <h2 class="m-t-20 mb-0">{{$accepted}}</h2>
                                                <p class="text-muted d-block m-b-0">Total Ride</p>
                                                {{-- <span class="text-primary"> <i class="fe fe-activity"></i> 155.5% </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxs-6 h-100 p-2 border-bottom">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="p-3 text-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-success"><i class="fe fe-user-check"></i></a>
                                                <h2 class="m-t-20 mb-0">{{$assigned}}</h2>
                                                <p class="text-muted d-block m-b-0">Assigned Orders</p>
                                                {{-- <span class="text-success"> <i class="fe fe-arrow-down-left"></i> 155.5% </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxs-6 h-100 p-2 ">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="p-3 text-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-info"><i class="fe fe-crosshair"></i></a>
                                                <h2 class="m-t-20 mb-0">{{$picked_up}}</h2>
                                                <p class="d-block m-b-0">Picked Up</p>
                                                {{-- <span class="text-info"> <i class="fe fe-arrow-up"></i> 155.5% </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxs-6 h-100 p-2 border-right border-xxs-bottom border-xxs-right-0">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="p-3 text-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-danger"><i class="fe fe-bar-chart-2"></i></a>
                                                <h2 class="m-t-20 mb-0">{{$delivered}}</h2>
                                                <p class="text-muted d-block m-b-0">Fulfilled Orders</p>
                                                {{-- <span class="text-danger"> <i class="fe fe-arrow-down-right"></i> 155.5% </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 m-b-30">
                    <div class="card card-statistics h-100 mb-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="card-heading">
                                <h4 class="card-title">Order History</h4>
                            </div>
                            {{-- <div class="dropdown">
                                <a class="btn btn-xs" href="#!">Export <i class="zmdi zmdi-download pl-1"></i> </a>
                            </div> --}}
                        </div>
                        <div class="card-body scrollbar scroll_dark pt-0" style="max-height: 350px;">
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
                                            <td>
                                                @if($allocated->accepted == 1)
                                                <button class="btn btn-xs btn-dark" disabled>Accepted</button>
                                                @elseif($allocated->accepted == 2)
                                                <button class="btn btn-xs btn-dark" disabled>Picked Up</button>
                                                @elseif($allocated->accepted == 3)
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
    </div>
</div>
<!-- end container-fluid -->
@endsection