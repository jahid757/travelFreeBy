@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Clients
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
                    <li class="breadcrumb-item active">Add Client</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Clients</strong> Information  </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('users.store')}}" files="true">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->companyid}}" name="companyid">
                            <input type="hidden" value="{{Auth::user()->companyinitials}}" name="companyinitials">
                            <input type="hidden" name="userid">

                            <h6 class="mt-4">Client Information</h6>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="client"><span class="red ml-3">*</span> <span>Client Name</span></label>
                                    <input id="cust" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{ old('Client_Name') }}" required autocomplete="Client_Name" placeholder="Enter Client Name">

                                    @error('Client_Name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="email"><span class="red ml-3">*</span> <span>Email</span></label>
                                    <input id="email" type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" required autocomplete="email" value="{{ old('email') }}">
                                    <p class="phnEmailRequiredText">Phone or email is mandatory</p>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="mobile"><span class="red ml-3">*</span> <span>Phone</span></label>
                                    <input id="mobile" type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="mobile" required autocomplete="mobile" value="{{ old('mobile') }}">
                                    <p class="phnEmailRequiredText">Phone or email is mandatory</p>
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert" id="mobileError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="corporate"><span class="ml-3"></span> <span>Corporate</span></label>
                                <select onchange="handleCorporate(this.value)" name="corporate" class="form-control show-tick" value="{{ old('corporate') }}">
                                    {{-- <option value="">-- Class --</option> --}}
                                    <option value="corporate">Corporate</option>
                                    <option value="individual">Individual</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="corporateName"><span class="red ml-3">*</span> <span>Corporate Name</span></label>
                                    <input  id="corporateName" type="text" name="corporateName" class="form-control @error('corporateName') is-invalid @enderror" placeholder="corporateName"  required autocomplete="corporateName" value="{{ old('corporateName') }}">
                                    @error('corporateName')
                                    <span class="invalid-feedback" role="alert" id="corporateNameError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="gender"><span class="ml-3 red">*</span> <span>Gender</span></label>
                                <select name="gender" class="form-control show-tick" value="{{ old('gender') }}">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="cummon">cummon</option>

                                    {{-- you can delete cummon gender --}}

                                </select>
                            </div>










                            {{-- <div class="flight row w-100" id="flight"> --}}



                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="to"><span style="opacity:0" class="red ml-3">*</span> <span>Frequent Flyer Number</span></label>
                                    <input onchange="checkCity()" id="to" type="text" name="to" class="form-control @error('to') is-invalid @enderror" placeholder="Frequent Flyer Number" required autocomplete="to" value="{{ old('to') }}">
                                    @error('to')
                                    <span class="invalid-feedback" role="alert" id="toError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="infantRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Passpost/ID Copy</span></label>
                                    <input id="infantRate" type="file" name="infantRate"class="form-control" placeholder="Infant Rate"  value="{{ old('infantRate') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="class"><span class="ml-3"></span> <span>Room Preference</span></label>
                                <select name="class" class="form-control show-tick" value="{{ old('room') }}">
                                    <option value="smoking">Smoking</option>
                                    <option value="nonSmoking">Non Smoking</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="class"><span class="ml-3"></span> <span>Seat Preference</span></label>
                                <select name="class" class="form-control show-tick" value="{{ old('class') }}">
                                    <option value="window">Window</option>
                                    <option value="middle">Middle</option>
                                    <option value="aisle">Aisle</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="depart"><span style="opacity:0" class="red ml-3">*</span> <span>Date of birth</span></label>
                                    <input id="dob" type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" placeholder="Dob" required autocomplete="dob" value="{{ old('dob') }}">
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert" id="dobError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="annivarsary"><span class="red ml-3" style="opacity:0">*</span> <span>Annivarsary Date</span></label>
                                    <input id="annivarsary" type="date" name="annivarsary" class="form-control" placeholder="Annivarsary Date" required autocomplete="annivarsary" value="{{ old('annivarsary') }}">

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="Address"><span style="opacity: 0" class="red ml-3">*</span> <span>Address</span></label>
                                    <input onchange="checkCity()" id="Address" type="text" name="Address" class="form-control @error('from') is-invalid @enderror" placeholder="Cities of World" required autocomplete="Address" value="{{ old('Address') }}">
                                    @error('Address')
                                    <span class="invalid-feedback" role="alert" id="AddressError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Remarks</span></label>
                                    <textarea id="direct" type="text" name="direct"class="form-control" placeholder="Remarks"  value="{{ old('direct') }}"></textarea>
                                </div>
                            </div>










                            {{-- </div> --}}


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
<script src="{{URL::asset('assets/js/leads.js')}}"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>

@endsection

@endsection
