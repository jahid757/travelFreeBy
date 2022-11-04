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
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
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
                        <form class="form-horizontal" method="post" action="{{ route('users.update', $user->id) }}" files="true" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required autocomplete="name" value="{{ $user->name }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert" id="nameError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="mobile" type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="mobile" required autocomplete="mobile" value="{{$errors->any() ? old('mobile') : $user->mobile}}">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert" id="mobileError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" required autocomplete="email" value="{{$errors->any() ? old('email') : $user->email }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert" id="emailError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <select name="gender" class="form-control show-tick" value="{{ old('gender') }}">
                                        <option value="">-- Gender --</option>
                                        <option value="Male" @if ($user->gender == "Male") {{ 'selected' }} @endif>Male</option>
                                        <option value="Female" @if ($user->gender == "Female") {{ 'selected' }} @endif>Female</option>
                                    </select>
                                </div>

                            </div>
                            <h6 class="mt-4">Account Information</h6>
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="company" class="form-control" readonly="" id="inputCompany" value="{{$compn}}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <select name="role_id" class="form-control show-tick @error('role_id') is-invalid @enderror" required autocomplete="role_id" value="{{ old('role_id') }}">
                                        <option value="">-- Role --</option>
                                        <option value="2" @if ($user->role_id == "2") {{ 'selected' }} @endif>User</option>
                                        <option value="3" @if ($user->role_id == "3") {{ 'selected' }} @endif>Accountant</option>
                                        <option value="1" @if ($user->role_id == "1") {{ 'selected' }} @endif>Administrator</option>
                                    </select>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert" id="role_idlError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>

@endsection

@endsection
