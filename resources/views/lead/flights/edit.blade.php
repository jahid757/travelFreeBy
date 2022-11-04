@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Leads
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
                    <li class="breadcrumb-item active">Add Flight Lead</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Flight</strong> Lead </h2>

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
                                    <label class = "ml-2" href="javascript:void(0)" data-toggle="modal" , id = "new-customer">Add New Client</a> <a class = "ml-5" href="/customers">My Clients</a></label>
                                    <input id="cust" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{ old('Client_Name') }}" required autocomplete="Client_Name" placeholder="Enter Client Name">

                                    @error('Client_Name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flight row w-100" id="flight">

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


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Depart Date </span></label>
                                    <input id="depart" type="date" name="depart" class="form-control @error('depart') is-invalid @enderror" placeholder="depart" required autocomplete="depart" value="{{ old('depart') }}">
                                    @error('depart')
                                    <span class="invalid-feedback" role="alert" id="departError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Return Date </span></label>
                                    <input id="return" type="date" name="return" class="form-control @error('return') is-invalid @enderror" placeholder="return" required autocomplete="return" value="{{ old('return') }}">
                                    @error('return')
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
                                    <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Number of Kids</span></label>
                                    <input id="kids" type="number" name="kids" value="0" class="form-control @error('kids') is-invalid @enderror" placeholder="Number of Kids" required autocomplete="kids" value="{{ old('kids') }}">
                                    @error('kids')
                                    <span class="invalid-feedback" role="alert" id="kidsError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Number of Infants</span></label>
                                    <input id="infant" type="number" name="infant" value="0" class="form-control @error('infant') is-invalid @enderror" placeholder="Number of Infants" required autocomplete="infant" value="{{ old('infant') }}">
                                    @error('infant')
                                    <span class="invalid-feedback" role="alert" id="infantError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="class"><span class="ml-3"></span> <span>Class</span></label>
                                <select name="class" class="form-control show-tick" value="{{ old('class') }}">
                                    <option value="">-- Class --</option>
                                    <option value="Economy">Economy</option>
                                    <option value="Premium">Premium</option>
                                    <option value="Business">Business</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="class"><span class="ml-3"></span> <span>Preference</span></label>
                                <select name="preference" class="form-control show-tick" value="{{ old('class') }}">
                                    <option value="">-- preference --</option>
                                    <option value="Economy">Direct</option>
                                    <option value="Premium">Via</option>
                                    <option value="Business">Both</option>
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Remarks</span></label>
                                    <textarea id="direct" type="text" name="direct"class="form-control" placeholder="Remarks"  value="{{ old('direct') }}"></textarea>
                                </div>
                            </div>







                            </div>






                            <div class="hotel w-100 row" id="hotel" style="display:none">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="city"><span class="red ml-3">*</span> <span>Cities of World</span></label>
                                        <input onchange="checkCity()" id="city" type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Cities of World" required autocomplete="city" value="{{ old('city') }}">
                                        @error('city')
                                        <span class="invalid-feedback" role="alert" id="fromError">
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








                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Remarks</span></label>
                                        <textarea id="remarks" type="text" name="remarks"class="form-control" placeholder="Remarks"  value="{{ old('remarks') }}"></textarea>
                                    </div>
                                </div>

                            </div>











                            <div class="package row w-100" id="package" style="display:none">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="city"><span class="red ml-3">*</span> <span>Cities of World</span></label>
                                        <input onchange="checkCity()" id="city" type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="Cities of World" required autocomplete="city" value="{{ old('city') }}">
                                        @error('city')
                                        <span class="invalid-feedback" role="alert" id="fromError">
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
                                            <span onclick="kidsHandler('down','kids_value_2','kids_ages_container_2')" class="kids_handler btn btn-primary btn-round">-</span>
                                            <input readonly id="kids_value_2" value="0" class="kids_value form-control ">
                                            <span onclick="kidsHandler('up','kids_value_2','kids_ages_container_2')" class="kids_handler btn btn-primary btn-round">+</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div id="kids_ages_container_2" class="row">

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








                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Remarks</span></label>
                                        <textarea id="direct" type="text" name="remarks"class="form-control" placeholder="Remarks"  value="{{ old('direct') }}"></textarea>
                                    </div>
                                </div>
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
<script src="{{URL::asset('assets/js/leads.js')}}"></script>

@endsection

@endsection
