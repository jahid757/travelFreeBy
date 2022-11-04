@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Packages Lead
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
                    <li class="breadcrumb-item active">Add Package Lead</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Lead</strong> Information  </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('users.store')}}" files="true">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->companyid}}" name="companyid">
                            <input type="hidden" value="{{Auth::user()->companyinitials}}" name="companyinitials">
                            <input type="hidden" name="userid">

                            <div class="col-sm-6 mb-3">
                                <label class="d-flex align-items-center" for=""><span class="red">*</span> <span>Flights in Label</span></label>
                                <div class="d-flex align-items-center">
                                    <div class="mr-2 d-flex align-items-center"><input onchange="flightLabelCheck(this.value)" class="mx-1" type="radio" name="travel" value="needed" checked="checked" id="needed"><label for="needed" class="mb-0">Needed</label></div>
                                    <div class=" d-flex align-items-center"><input onchange="flightLabelCheck(this.value)" class="mx-1"  type="radio" value="notNeeded" name="travel" id="notNeeded"><label for="notNeeded" class="mb-0">Not needed</label></div>
                                </div>
                            </div>

                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class = "ml-3" href="javascript:void(0)" data-toggle="modal" , id = "new-customer">Add New Client</a> <a class = "ml-5" href="/customers">My Clients</a></label>
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
                                    <label class="d-flex align-items-center" for="User"><span class="red ml-3">*</span> <span>User</span></label>
                                    <input id="cust" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{ old('Client_Name') }}" required autocomplete="Client_Name" placeholder="Assign User">

                                    @error('Client_Name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="from"><span class="red ml-3">*</span> <span>From</span></label>
                                    <input onchange="checkCity()" id="from" type="text" name="from" class="form-control @error('from') is-invalid @enderror" placeholder="Enter Origin" required autocomplete="from" value="{{ old('from') }}">
                                    @error('from')
                                    <span class="invalid-feedback" role="alert" id="fromError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="to"><span class="red ml-3">*</span> <span>To</span></label>
                                    <input onchange="checkCity()" id="to" type="text" name="to" class="form-control @error('to') is-invalid @enderror" placeholder="Enter Destination" required autocomplete="to" value="{{ old('to') }}">
                                    @error('to')
                                    <span class="invalid-feedback" role="alert" id="toError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="hotel w-100 row" id="hotel"> --}}
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="city"><span class="red ml-3">*</span> <span>City / Hotel Name</span></label>
                                        <input onchange="checkCity()" id="city" type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Enter City/Hotel Name" required autocomplete="city" value="{{ old('city') }}">
                                        @error('city')
                                        <span class="invalid-feedback" role="alert" id="fromError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Number of Rooms</span></label>
                                        <input id="rooms" type="number" name="rooms" class="form-control @error('adult') is-invalid @enderror" placeholder="Number of Rooms" required autocomplete="rooms" value="{{ old('rooms') }}">
                                        @error('rooms')
                                        <span class="invalid-feedback" role="alert" id="roomsError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="check"><span class="red ml-3">*</span> <span>Check In </span></label>
                                        <input id="check" type="date" name="check" class="form-control @error('check') is-invalid @enderror" placeholder="Check In" required autocomplete="check" value="{{ old('check') }}">
                                        @error('check')
                                        <span class="invalid-feedback" role="alert" id="checkError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="checkout"><span class="red ml-3">*</span> <span>Check Out </span></label>
                                        <input id="checkout" type="date" name="checkout" class="form-control @error('checkout') is-invalid @enderror" placeholder="Check out" required autocomplete="checkout" value="{{ old('checkout') }}">
                                        @error('checkout')
                                        <span class="invalid-feedback" role="alert" id="returnError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Number of Adults</span></label>
                                        <input id="adult" type="number" name="adult" class="form-control @error('adult') is-invalid @enderror" placeholder="Number of Adults" required autocomplete="adult" value="{{ old('adult') }}">
                                        @error('adult')
                                        <span class="invalid-feedback" role="alert" id="adultError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="rating"><span class="ml-3"></span> <span>Number of Kids</span></label>
                                        <div class="pl-3 d-flex align-items-center">
                                            <span onclick="kidsHandler('down','kids_value','kids_ages_container')" class="kids_handler btn btn-primary btn-round">-</span>
                                            <input readonly id="kids_value" value="0" class="kids_value form-control ">
                                            <span onclick="kidsHandler('up','kids_value','kids_ages_container')" class="kids_handler btn btn-primary btn-round">+</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div id="kids_ages_container" class="row">

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Number of Nights</span></label>
                                        <input id="nights" type="number" name="nights" class="form-control @error('nights') is-invalid @enderror" placeholder="Number of Nights" required autocomplete="rooms" value="{{ old('nights') }}">
                                        @error('nights')
                                        <span class="invalid-feedback" role="alert" id="roomsError">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="d-flex align-items-center" for="bed"><span class="ml-3"></span> <span>Bed Configuration</span></label>
                                    <select name="bed" class="form-control show-tick" value="{{ old('bed') }}">
                                        <option value="">-- Bed Configuration --</option>
                                        <option value="double">Double</option>
                                        <option value="twin">Twin</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label class="d-flex align-items-center" for="rating"><span class="ml-3"></span> <span>Rating</span></label>
                                    <select name="rating" class="form-control show-tick" value="{{ old('rating') }}">
                                        <option value="">-- Rating --</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>


                                <div class="col-sm-6">
                                    <label class="d-flex align-items-center" for="class"><span class="red ml-3">*</span> <span>Lead Status</span></label>
                                    <select name="status" class="form-control show-tick" value="{{ old('class') }}">
                                        <option value="">-- Lead Status --</option>
                                        <option value="Open">Open</option>
                                        <option value="Converted">Converted</option>
                                        <option value="Lost">Lost</option>
                                    </select>
                                </div>





                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Remarks</span></label>
                                        <textarea id="remarks" type="text" name="remarks"class="form-control" placeholder="Remarks"  value="{{ old('remarks') }}"></textarea>
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
