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
        <div class="row mb-3">

                            <div class="col-sm-6 mb-1">
                                <div class="d-flex align-items-center">
                                    <div class="mr-2 d-flex align-items-center"><input value="withFlight" onchange="checkTripType('client1','withFlight','flightTicket')" class="mx-1" type="radio" name="client" id="client1"><label for="client1" class="mb-0">With Flights</label></div>
                                    <div class=" d-flex align-items-center"><input value="withoutFlight" onchange="checkTripType('client2','withFlight','flightTicket')" checked="checked" class="mx-1"  type="radio" name="client" id="client2"><label for="client2" class="mb-0">Without Flights</label></div>
                                </div>
                            </div>


                        </div>
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

                            {{-- <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="portal"><span class="ml-3"></span> <span>Portal Booked</span></label>
                                <select name="portal" class="form-control show-tick" value="{{ old('portal') }}">
                                    <option value="">-- Class --</option>
                                    <option value="adult">SP Adult</option>
                                    <option value="child">SP Child</option>
                                    <option value="infant">SP Infant</option>
                                </select>
                            </div> --}}


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="hotel"><span class="red ml-3">*</span> <span>Hotel Name</span></label>
                                    <input onchange="checkCity()" id="hotel" type="text" name="hotel" class="form-control @error('hotel') is-invalid @enderror" placeholder="Hotel Name" required autocomplete="hotel" value="{{ old('hotel') }}">
                                    @error('hotel')
                                    <span class="invalid-feedback" role="alert" id="hotelError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="city"><span class="red ml-3">*</span> <span>City Name</span></label>
                                    <input onchange="checkCity()" id="city" type="text" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="City Name" required autocomplete="city" value="{{ old('city') }}">
                                    @error('city')
                                    <span class="invalid-feedback" role="alert" id="cityError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="checkIn"><span class="red ml-3">*</span> <span>Check in Date </span></label>
                                    <input id="checkIn" type="date" name="checkIn" class="form-control @error('checkIn') is-invalid @enderror" placeholder="checkIn" required autocomplete="checkIn" value="{{ old('checkIn') }}">
                                    @error('checkIn')
                                    <span class="invalid-feedback" role="alert" id="checkInError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="checkOut"><span class="red ml-3">*</span> <span>Check out Date </span></label>
                                    <input id="checkOut" type="date" name="checkOut" class="form-control @error('checkOut') is-invalid @enderror" placeholder="checkOut" required autocomplete="checkOut" value="{{ old('checkOut') }}">
                                    @error('checkOut')
                                    <span class="invalid-feedback" role="alert" id="checkOutError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="room"><span class="ml-3"></span> <span>Number of Rooms</span></label>
                                <select name="room" class="form-control show-tick" value="{{ old('room') }}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="planType"><span class="ml-3"></span> <span>Plan Type</span></label>
                                <select name="planType" class="form-control show-tick" value="{{ old('planType') }}">
                                    <option value="cp">CP</option>
                                    <option value="map">MAP</option>
                                    <option value="ap">AP</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="sellPriceAdult"><span class="red ml-3">*</span> <span>	Selling price Per Adult</span></label>
                                    <input id="sellPriceAdult" type="text" name="sellPriceAdult"  class="form-control @error('sellPriceAdult') is-invalid @enderror" placeholder="Selling price Per Adult"  required autocomplete="sellPriceAdult" value="{{ old('sellPriceAdult') }}">
                                    @error('sellPriceAdult')
                                    <span class="invalid-feedback" role="alert" id="sellPriceAdult">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="sellPriceChaild"><span class="red ml-3">*</span> <span>	Selling price Per Child</span></label>
                                    <input id="sellPriceChaild" type="text" name="sellPriceChaild"  class="form-control @error('sellPriceChaild') is-invalid @enderror" placeholder="Selling price Per Chaild"  required autocomplete="sellPriceChaild" value="{{ old('sellPriceChaild') }}">
                                    @error('sellPriceChaild')
                                    <span class="invalid-feedback" role="alert" id="sellPriceChaild">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="sellPriceinfant"><span class="red ml-3">*</span> <span>	Selling price Per infant</span></label>
                                    <input id="sellPriceinfant" type="text" name="sellPriceinfant"  class="form-control @error('sellPriceinfant') is-invalid @enderror" placeholder="Selling price Per infant"  required autocomplete="sellPriceinfant" value="{{ old('sellPriceinfant') }}">
                                    @error('sellPriceinfant')
                                    <span class="invalid-feedback" role="alert" id="sellPriceinfant">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="totalNight"><span class="red ml-3">*</span> <span>Total Night</span></label>
                                    <input id="totalNight" type="text" name="totalNight"  class="form-control @error('infant') is-invalid @enderror" placeholder="Total Night" readonly required autocomplete="infant" value="{{ old('infant') }}">
                                    @error('infant')
                                    <span class="invalid-feedback" role="alert" id="infantError">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-sm-6">
                                <label class="d-flex align-items-center" for="hotelVouchered"><span class="ml-3"></span> <span>Hotel Vouchered</span></label>
                                <select name="hotelVouchered" onchange="ticketChecked(this.value)" class="form-control show-tick" value="{{ old('hotelVouchered') }}">
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
                                    <label class="d-flex align-items-center" for="hotelVoucher"> <span class="red ml-3" style="opacity: 0">*</span><span>Upload Hotel Voucher </span></label>
                                    <input  id="hotelVoucher" type="file" name="hotelVoucher"class="form-control" placeholder="Infant Rate"  value="{{ old('hotelVoucher') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="flightTicket"> <span class="red ml-3" style="opacity: 0">*</span><span>Upload Ticket</span></label>
                                    <input disabled id="flightTicket" type="file" name="flightTicket"class="form-control" placeholder="Infant Rate"  value="{{ old('flightTicket') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="d-flex align-items-center" for="totalSaleValue"> <span class="red ml-3" style="opacity: 0">*</span><span>Total sale value</span></label>
                                    <input id="totalSaleValue" type="text" name="totalSaleValue"class="form-control" placeholder="Total sale value"  value="{{ old('totalSaleValue') }}">
                                </div>
                            </div>


                        </div>

                        <div class="col-sm-12 mt-2">
                            <div class="form-group">
                                <label class="d-flex align-items-center" for="remarks"> <span class="red ml-3" style="opacity: 0">*</span><span>Ops Remarks</span></label>
                                <textarea id="direct" type="text" name="direct"class="form-control" placeholder="Remarks"  value="{{ old('direct') }}"></textarea>
                            </div>
                        </div>


                        {{-- from accounts point of view --}}

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
                                        <label class="d-flex align-items-center" for="portal"> <span class="red ml-3" style="opacity: 1">*</span><span>Form of Payment</span></label>
                                        <select name="portal" class="form-control show-tick" value="{{ old('portal') }}">
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
