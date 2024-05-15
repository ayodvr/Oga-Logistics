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
                    <h1>Edit Estimate</h1>
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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Estimate</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- end page title -->
        </div>
    </div>
    <!-- end row -->
    <!-- start Validation row -->
    <div class="row formavlidation-wrapper">
        
        <div class="col-xl-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title"></h4>
                    </div>
                </div>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" style="width:92%; margin:auto">
                        {{$error}}</div>
                    @endforeach
                    @endif
                    @if(session('success'))
                    <div class="alert alert-success" style="width:92%; margin:auto">
                    {{session('success')}}</div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger" style="width:92%; margin:auto">
                    {{session('error')}}</div>
                @endif
                <br>
                <div class="card-body">
                    <form  method="post" class="form-horizontal" action="{{route('customer.update', $estimate->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="control-label" for="firstname1">Base Fare</label>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="bname" name="baseFare" value="{{$estimate->baseFare}}" placeholder="Enter base fare" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="username1">Rate Per Km</label>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="phone" name="ratePerKm" value="{{$estimate->ratePerKm}}" placeholder="Enter rate per km" />
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end Validation row  -->

</div>
<!-- end container-fluid -->
@endsection