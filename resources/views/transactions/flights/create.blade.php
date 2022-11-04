@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Add Transaction
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
                    <li class="breadcrumb-item active">Add Flight </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Flight</strong> Information  </h2>

                    </div>
                    <div class="body">
                        <form class="form-horizontal" method="Post" action="{{route('users.store')}}" files="true">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{Auth::user()->companyid}}" name="companyid">
                            <input type="hidden" value="{{Auth::user()->companyinitials}}" name="companyinitials">
                            <input type="hidden" name="userid">
                            <h6 class="mt-4">Flight Information</h6>
                            <div class="row">
                                <div class="col-sm-6 mb-1">
                                    <label class="d-flex align-items-center" for=""><span class="red">*</span> <span>Trip Type</span></label>
                                    <div class="d-flex align-items-center">
                                        <div class="mr-2 d-flex align-items-center"><input value="oneWay" onchange="checkTripType('travel1','oneWay','return')" class="mx-1" type="radio" name="travel" id="travel1"><label for="travel1" class="mb-0">One Way</label></div>
                                        <div class=" d-flex align-items-center"><input value="roundTrip" onchange="checkTripType('travel2','oneWay','return')" checked="checked" class="mx-1"  type="radio" name="travel" id="travel2"><label for="travel2" class="mb-0">Round Trip</label></div>
                                    </div>
                                </div>

                            </div>
                            <h6 class="mt-4">Client Information</h6>
                            <div class="row clearfix">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="triptype"><a class = "ml-3" href="javascript:void(0)" data-toggle="modal" , id = "new-customer">Add New Passenger</a> <a class = "ml-5" href="/customers">My Passengers</a></label>
                                    <input id="passenger" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{ old('Client_Name') }}" required autocomplete="Client_Name" placeholder="Enter Passenger Name">

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
                                    <input id="cust" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{Auth::user()->name}}" readonly required autocomplete="Client_Name" placeholder="Assign User">

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
                                    <input onchange="checkCity()" id="from" type="text" name="from" class="form-control @error('from') is-invalid @enderror" placeholder="Cities of World" required autocomplete="from" value="{{ old('from') }}">
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
                                    <input onchange="checkCity()" id="to" type="text" name="to" class="form-control @error('to') is-invalid @enderror" placeholder="Cities of World" required autocomplete="to" value="{{ old('to') }}">
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
                                <label class="d-flex align-items-center" for="portal"><span class="ml-3"></span> <span>Portal Booked</span></label>
                                <select name="portal" class="form-control show-tick" value="{{ old('portal') }}">
                                    {{-- <option value="">-- Class --</option> --}}
                                    <option value="adult">SP Adult</option>
                                    <option value="child">SP Child</option>
                                    <option value="infant">SP Infant</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="ticket"><span class="ml-3"></span> <span>Ticket</span></label>
                                <select onchange="ticketChecked(this.value)" name="ticket" class="form-control show-tick" value="{{ old('ticket') }}">
                                    <option value="yes">YES</option>
                                    <option value="no">NO</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="lastTickDate"><span style="opacity: 1" class=" ml-3"></span> <span>Last date to issue</span></label>
                                    <input readonly="true" id="lastTickDate" type="date" name="lastTickDate" class="form-control" placeholder="lastTickDate" required value="{{ old('lastTickDate') }}">
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
                                    <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Infant</span></label>
                                    <input id="infant" type="number" name="infant" value="0" class="form-control @error('infant') is-invalid @enderror" placeholder="Infant" required autocomplete="infant" value="{{ old('infant') }}">
                                    @error('infant')
                                    <span class="invalid-feedback" role="alert" id="infantError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="depart"><span class="red ml-3">*</span> <span>Portal / GDS PNR</span></label>
                                    <input id="pnr" type="text" name="pnr"  class="form-control @error('infant') is-invalid @enderror" placeholder="PNR" required autocomplete="infant" value="{{ old('infant') }}">
                                    @error('infant')
                                    <span class="invalid-feedback" role="alert" id="infantError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="adlutRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Adult Rate</span></label>
                                    <input id="adlutRate" type="text" name="adlutRate"class="form-control" placeholder="Adult Rate"  value="{{ old('adlutRate') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="kidsRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Kids Rate</span></label>
                                    <input id="kidsRate" type="text" name="kidsRate"class="form-control" placeholder="Kids Rate"  value="{{ old('kidsRate') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="infantRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Infant Rate</span></label>
                                    <input id="infantRate" type="text" name="infantRate"class="form-control" placeholder="Infant Rate"  value="{{ old('infantRate') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="grandTotal"> <span class="red ml-3" style="opacity: 0">*</span><span>Grand Total</span></label>
                                    <input id="grandTotal" type="text" name="grandTotal"class="form-control" placeholder="Grand Total"  value="{{ old('infantRate') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="infantRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Upload E-ticket</span></label>
                                    <input id="infantRate" type="file" name="infantRate"class="form-control" placeholder="Infant Rate"  value="{{ old('infantRate') }}">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Ops Remarks</span></label>
                                    <textarea id="direct" type="text" name="direct"class="form-control" placeholder="Remarks"  value="{{ old('direct') }}"></textarea>
                                </div>
                            </div>





                            </div>
                            <div class="payment">
                                <h6>Accounts Section</h6>
                                <div class="row">

                            {{-- from accounts point of view --}}



                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="infantRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Upload invoice</span></label>
                                    <input id="infantRate" type="file" name="infantRate"class="form-control" placeholder="Infant Rate"  value="{{ old('infantRate') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="infantRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Total Payment Rechived</span></label>
                                    <input id="payRechived" type="text" name="payRechived"class="form-control" placeholder="Total Payment Rechived"  value="{{ old('payRechived') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="infantRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Payment Rechived Date</span></label>
                                    <input id="payRechivedDate" type="date" name="payRechivedDate"class="form-control" placeholder="Payment Rechived Date"  value="{{ old('payRechivedDate') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="infantRate"> <span class="red ml-3" style="opacity: 0">*</span><span>Balance Payment</span></label>
                                    <input id="balancePay" type="text" name="balancePay"class="form-control" placeholder="Payment Rechived"  value="{{ old('balancePay') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="d-flex align-items-center" for="formOfPayment"> <span class="red ml-3" style="opacity: 1">*</span><span>Form of Payment</span></label>
                                            <select name="formOfPayment" class="form-control show-tick" value="{{ old('formOfPayment') }}">
                                                {{-- <option value="">-- Class --</option> --}}
                                                <option value="HDFC">HDFC Bank</option>
                                                <option value="ICICI">ICICI Bank</option>
                                                <option value="HDFCP">HDFC Personal</option>
                                                <option value="HDFCPazapp">HDFC Pazapp</option>
                                                <option value="HDFCPazapp">Cash</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Accounts Remarks</span></label>
                                    <textarea id="direct" type="text" name="direct"class="form-control" placeholder="Remarks"  value="{{ old('direct') }}"></textarea>
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
<script src="{{URL::asset('assets/js/custom.js')}}"></script>

@endsection

@endsection
