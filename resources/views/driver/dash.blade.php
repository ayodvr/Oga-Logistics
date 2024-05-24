@extends('mobilelayouts.master')

@section('content')
  <!-- begin container-fluid -->
  <div class="container-fluid">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-12 m-b-30">
            <!-- begin page title -->
            <div class="user-welcome d-block d-xl-flex flex-nowrap align-items-center">
                {{-- <div class="bg-img mb-2 mb-xl-0 mr-3">
                    <img class="img-fluid rounded" src="assets/img/avtar/06.jpg" alt="user">
                </div> --}}
                <div class="page-title mb-2 mb-xl-0">
                    <h1 class="mb-1">Hi, Michael!</h1>
                    <p>You have 7 essential tasks today, 8 messages and notifications to respond.</p>
                </div>
                <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                    {{-- <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo list">
                        <i class="fe fe-edit btn btn-icon text-primary"></i>
                    </a>
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Projects">
                        <i class="fa fa-lightbulb-o btn btn-icon text-success"></i>
                    </a> --}}
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Task">
                        <i class="fa fa-check btn btn-icon text-warning"></i>
                    </a>
                    {{-- <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar">
                        <i class="fa fa-calendar-o btn btn-icon text-cyan"></i>
                    </a> --}}
                    <a href="javascript:void(0);" class="tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Analytics">
                        <i class="fa fa-bar-chart-o btn btn-icon text-danger"></i>
                    </a>
                </div>
                {{-- <div class="ml-xl-4 mt-xl-0 ml-0 mt-3 d-flex align-items-center">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Add New
                        </a>
                        <div class="dropdown-menu custom-dropdown dropdown-menu-right dropdown-menu-left-mobile p-4">
                            <a class="dropdown-item" href="#"><i class="ti ti-layers-alt"></i>Add Project </a>
                            <a class="dropdown-item" href="#"><i class="ti ti-files"></i>Add Task </a>
                            <a class="dropdown-item" href="#"><i class="ti ti-id-badge"></i>Add Team </a>
                            <a class="dropdown-item" href="#"><i class="ti ti-pencil-alt"></i>Leave App </a>
                            <a class="dropdown-item" href="#"><i class="ti ti-email"></i>New Message</a>
                            <a class="dropdown-item" href="#"><i class="ti ti-user"></i>Edit Profile</a>
                            <a class="dropdown-item" href="#"><i class="ti ti-settings"></i>Settings</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- end page title -->
    </div>

    <div class="row">
        <div class="col-md-12">
          <div
            class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
            role="alert"
          >
            <strong>Hey! Driver</strong> You have 4 pending orders to attend to
            <button
              type="button"
              class="close"
              data-dismiss="alert"
              aria-label="Close"
            >
              <i class="ti ti-close"></i>
            </button>
          </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-6 col-xxl-4">
                    <div class="card card-statistics bg-gradient">
                        <div class="card-header d-flex justify-content-between border-0 pb-0">
                            <div class="card-heading">
                                <h4 class="card-title text-white">Next payout</h4>
                            </div>
                            <div class="dropdown">
                                <a class="text-white tooltip-wrapper font-18" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Payout account: XXXX4955"><i class="fa fa-question-circle-o"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="text-white mb-0">$12,127.48</h2>
                            <p class="text-white">Your payout will be processed on January 15, 2019</p>
                        </div>
                    </div>
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
                                                <h2 class="m-t-20 mb-0">$272</h2>
                                                <p class="text-muted d-block m-b-0">Total Ride</p>
                                                <span class="text-primary"> <i class="fe fe-activity"></i> 155.5% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxs-6 h-100 p-2 border-bottom">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="p-3 text-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-success"><i class="fe fe-user-check"></i></a>
                                                <h2 class="m-t-20 mb-0">$450</h2>
                                                <p class="text-muted d-block m-b-0">Fulfilled Orders</p>
                                                <span class="text-success"> <i class="fe fe-arrow-down-left"></i> 155.5% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxs-6 h-100 p-2 border-right border-xxs-bottom border-xxs-right-0">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="p-3 text-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-danger"><i class="fe fe-bar-chart-2"></i></a>
                                                <h2 class="m-t-20 mb-0">$135</h2>
                                                <p class="text-muted d-block m-b-0">Pending Orders</p>
                                                <span class="text-danger"> <i class="fe fe-arrow-down-right"></i> 155.5% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxs-6 h-100 p-2 ">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="p-3 text-center">
                                                <a href="javascript:void(0);" class="btn btn-icon btn-round btn-inverse-info"><i class="fe fe-crosshair"></i></a>
                                                <h2 class="m-t-20 mb-0">$7525</h2>
                                                <p class="d-block m-b-0">Declined Orders</p>
                                                <span class="text-info"> <i class="fe fe-arrow-up"></i> 155.5% </span>
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
                                <table id="datatable" class="table table-borderless table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>In stock</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cold Shoulder Bling Dress</td>
                                            <td>$65.342</td>
                                            <td>
                                                <div class="progress my-3" style="height: 3px;">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success-inverse">Active</span></td>
                                            <td> <a class="mr-3" href="javascript:void(0);"><i class="fe fe-edit"></i></a><a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>In stock</th>
                                            <th>Status</th>
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