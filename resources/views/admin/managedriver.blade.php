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
                                        <h1>All Drivers</h1>
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
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Manage Driver</li>
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
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title"></h4>
                                        </div>
                                        {{-- <div class="dropdown">
                                            <a class="btn btn-xs" href="#!">Export <i class="zmdi zmdi-download pl-1"></i> </a>
                                        </div> --}}
                                    </div>
                                    <div class="card-body scrollbar scroll_dark pt-0" style="">
                                        <div class="datatable-wrapper table-responsive">
                                            <table id="datatable" class="table table-borderless table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td>{{$user->id}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->last_name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->phone}}</td>
                                                        <td> 
                                                            <a class="mr-3" href="{{route('driver_info', $user->id)}}"><i class="fe fe-eye"></i></a>
                                                            <a href="{{route('driver_kill', $user->id)}}" onclick="return confirm_delete()"><i class="fe fe-trash-2"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
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
                    <!-- end container-fluid -->
        <script type="text/javascript">
            function confirm_delete() {
                return confirm('Are you sure you want to delete driver?');
            }
        </script>
@endsection