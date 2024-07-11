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
                    <h1>Update Account</h1>
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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Account</li>
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
                    <form  method="POST" class="form-horizontal" action="/update_account/{{$account->id}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="control-label" for="firstname1">Account Name</label>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="bname" name="acct_name" value="{{$account->acct_name}}" placeholder="Enter account name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="username1">Account Number</label>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="phone" name="acct_number" value="{{$account->acct_number}}" placeholder="Enter account number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="username1">Bank Name</label>
                            <div class="mb-2">
                                <input type="text" class="form-control" id="phone" name="bank_name" value="{{$account->bank_name}}" placeholder="Enter bank name" />
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