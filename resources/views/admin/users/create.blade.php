@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Agent
                <small>Welcome to {{$compn}}</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Visitors</small>
                </div>
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                    <small class="col-white">Bounce Rate</small>
                </div>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="zmdi zmdi-home"></i> {{$compn}}</a></li>
                    <li class="breadcrumb-item active">Add Agent</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Personal</strong> Information  </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('users.store')}}" files="true">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->companyid}}" name="companyid">
                            <input type="hidden" value="{{Auth::user()->companyinitials}}" name="companyinitials">
                            <input type="hidden" name="userid">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="name"><span class="red ml-3">*</span> <span>Name</span></label>
                                    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required autocomplete="name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert" id="nameError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="mobile"><span class="red ml-3">*</span> <span>Phone</span></label>
                                    <input id="mobile" type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="mobile" required autocomplete="mobile" value="{{ old('mobile') }}">
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert" id="mobileError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="email"><span class="red ml-3">*</span> <span>Email</span></label>
                                    <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" required autocomplete="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="gender"><span class="ml-3"></span> <span>Gender</span></label>
                                <select name="gender" class="form-control show-tick" value="{{ old('gender') }}">
                                    <option value="">-- Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                        </div>
                        <h6 class="mt-4">Account Information</h6>
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="company"><span class="red ml-3">*</span> <span>Company</span></label>
                                    <input type="text" name="company" class="form-control" readonly="" id="inputCompany" value="{{$compn}}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="role_id"><span class="red ml-3">*</span> <span>Role</span></label>
                                <select name="role_id" class="form-control show-tick @error('role_id') is-invalid @enderror" required autocomplete="role_id" value="{{ old('role_id') }}">
                                    <option value="">-- Role --</option>
                                    <option selected value="2" >Agent</option>
                                    <option value="3" >Accountant</option>
                                    <option value="1" >Administrator</option>
                                </select>
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert" id="role_idlError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="password"><span class="red ml-3">*</span> <span>Password</span></label>
                                    <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" required autocomplete="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="confirmPassword"><span class="red ml-3">*</span> <span>Confirm Password</span></label>
                                    <input id="confirmpassword" type="password" name="confirmpassword" class="form-control @error('confirmpassword') is-invalid @enderror" placeholder="confirm password" required autocomplete="confirmpassword">
                                    @error('confirmpassword')
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-12 mt-4">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            <a href="{{route('users.index')}}" class="btn btn-primary btn-round">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scriptsc')


@endsection

@endsection
