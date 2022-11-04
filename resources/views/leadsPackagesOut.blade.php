<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel Freeby</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assetsh/css/welcome_css_.css" />
    <script src="https://kit.fontawesome.com/4b5d72e539.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4b5d72e539.js" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/ijabocrop/ijaboCropTool.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('dist/image-uploader.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/custom.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/color_skins.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        select {
            padding: 10px !important;
        }
    </style>
</head>

<body style="background-color:#fff">
    <header>
        <nav class="fixed_menu">
            <div class="container">
              <div
                class="nav-wrapper d-flex align-items-center justify-content-between"
              >
                <a href="/" class="brand-logo">
                  <img src="assetsh/img/welcome_img/logo.webp" alt="" />
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a  href="/">Home</a></li>
                  <li onclick="menuToggle('toggle_menu')"  class="position-relative toggle_link"><a class="active d-inline-block"href="javascript:void(0)">take free quetation </a>
                    <button class="toggle_btn d-inline-block"><i class="fa fa-caret-down"></i></button>
                    <ul id="toggle_menu" class="toggle_menu position-absolute">
                        <li><a href="/user/leads/flights/create">flights</a></li>
                        <li><a href="/user/leads/hotels/create">hotels</a></li>
                        <li><a href="/user/leads/packages/create">packages</a></li>
                    </ul>
                    </li>

                    <li onclick="menuToggle('toggle_menu_my_ques')" class="position-relative toggle_link"><a class="active d-inline-block" href="javascript:void(0)">my quetation </a>
                        <button class="toggle_btn d-inline-block"><i class="fa fa-caret-down"></i></button>
                        <ul id="toggle_menu_my_ques" class="toggle_menu position-absolute">
                            <li><a href="/user/quetation/flights/create">flights</a></li>
                            <li><a href="/user/quetation/hotels/create">hotels</a></li>
                            <li><a href="/user/quetation/packages/create">packages</a></li>
                        </ul>
                        </li>
                    <li onclick="menuToggle('toggle_menu_bookings')" class="position-relative toggle_link"><a class="active d-inline-block"href="javascript:void(0)">my bookings </a>
                        <button class="toggle_btn d-inline-block"><i class="fa fa-caret-down"></i></button>
                        <ul id="toggle_menu_bookings" class="toggle_menu position-absolute">
                            <li><a href="/user/bookings/flights/create">flights</a></li>
                            <li><a href="/user/bookings/hotels/create">hotels</a></li>
                            <li><a href="/user/bookings/packages/create">packages</a></li>
                        </ul>
                        </li>
                  <li class=""><a href="/login">Log In</a></li>
                  <li class=""><a href="/register">Sign Up</a></li>
                </ul>
                <i onclick="menuToggle('nav-mobile')" class="fa fa-bars"></i>
              </div>
            </div>
          </nav>
      </header>

    <!-- travel section -->


    <div class="container" style="margin-top:75px">
        <div class="card">
            <div class="row clearfix">
                <div class="header">
                    <h2><strong>Lead</strong> Packages Information  </h2>

                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><span class="red ml-3">*</span><span>Enter Your Name</span></label>
                        <input id="cust" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{ old('Client_Name') }}" required autocomplete="Client_Name" placeholder="Enter Your Name">

                        @error('Client_Name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="d-flex align-items-center" for="User"><span class="red ml-3">*</span> <span>Enter Your Email</span></label>
                        <input id="cust" name="Client_Name" class="form-control @error('Client_Name') is-invalid @enderror " value="{{ old('Client_Name') }}" required autocomplete="Client_Name" placeholder="Enter Your Email">

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
                        <div class="from-group">
                            <label class="d-flex align-items-center" for="bed"><span class="ml-3"></span> <span>Bed Configuration</span></label>
                        <select name="bed" class="form-control show-tick" value="{{ old('bed') }}">
                            <option value="">-- Bed Configuration --</option>
                            <option value="double">Double</option>
                            <option value="twin">Twin</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="d-flex align-items-center" for="rating"><span class="ml-3"></span> <span>Rating</span></label>
                        <select name="rating" class="form-control show-tick" value="{{ old('rating') }}">
                            <option value="">-- Rating --</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="d-flex align-items-center" for="depart"><span style="opacity:0" class="red ml-3">*</span> <span>Phone Number</span></label>
                            <input id="adult" type="text" name="adult" class="form-control @error('adult') is-invalid @enderror" placeholder="Phone Number" required autocomplete="adult" value="{{ old('adult') }}">
                            @error('adult')
                            <span class="invalid-feedback" role="alert" id="adultError">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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
                <a href="{{ route('users.index') }}" class="btn btn-primary btn-round">Cancel</a>
            </div>
        </div>
    </div>
    </div>
    </div>





    <footer>

        <div class="container">
            <div class="row bottom_part">
                <div class="col-md-5">
                    <img src="assetsh/img/welcome_img/logo.png" alt="logo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, cupiditate.</p>
                </div>
                <div class="col-md-2">
                    <ul>
                        <li><a href="/services">Service</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li><a href="/visa">Visa</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href="/terms">Teams and Conditions</a></li>
                        <li><a href="/privacy">Privacy Policy</a></li>
                        <li><a href="/cookie">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul>
                        <li><a href="mailto:travelfreeby@gmail.com">travelfreeby@gmail.com</a></li>
                        <li class="social">
                            <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="background: #fff;">
        <div class="text-center  copyright">
            <p class="mb-0">Copyright © 2022 Travel Freeby - A Product of EBMV LLP - All Rights Reserved.</p>
        </div>
    </footer>
    <!-- external section -->
    <div id="chat" class="fixed_message">
        <div class="chat_container">
            <div class="chat_header">
                <h2>Travel Freeby</h2>
            </div>
            <div id="chat_input">
                <form action="" method="get">
                    <input type="text" name="" id="" placeholder="Name">
                    <input type="email" name="" id="" placeholder="Email">
                    <textarea name="" id="" placeholder="How can we help?*"></textarea>
                    <div class="text-center">
                        <button type="submit">SEND</button>
                    </div>
                </form>
                <p class="text-center">This site is protected by reCAPTCHA and the Google <a href="#">Privacy
                        Policy</a> and <a href="#">Terms of Service</a> apply.</p>
            </div>
        </div>
        <div class="chat_icon">
            <i id="chatIcon" onclick="chatToggle('chat','chatIcon')" class="fa fa-comment"></i>
        </div>
    </div>

    <script src="assetsh/js/welcome.js"></script>
    <script src="{{URL::asset('assets/js/leads.js')}}"></script>
</body>

</html>
