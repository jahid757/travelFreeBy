<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="RealEstate Admin Dashboard template, UI kit, Bootstrap 4x">
<meta name="author" content="Thememakker">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>:: Propertymitr RealEstate :: Home</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/fileupload/css/fileupload.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{URL::asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/charts-c3/plugin.css')}}" />
<link rel="stylesheet" href="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
<link rel="stylesheet" href="{{URL::asset('assets/plugins/dropzone/dropzone.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
<link rel="stylesheet" href="{{URL::asset('assets/plugins/select2/select2.css')}}" />
<link rel="stylesheet" href="{{URL::asset('assets/plugins/ijabocrop/ijaboCropTool.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('dist/image-uploader.min.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- Custom Css -->

<link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">

<link rel="stylesheet" href="{{URL::asset('assets/css/color_skins.css')}}">
{{-- Icon --}}
<script src="https://kit.fontawesome.com/4b5d72e539.js" crossorigin="anonymous"></script>
<style type="text/css">

  .stretched-link::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0,0,0,0);
}
.card .card-footer {
   z-index: 1;
   position: relative;
}
.card .read_more_btn {
   z-index: 1;
   position: relative;
}

.no-border {
    border: 0;
    box-shadow: none; /* You may want to include this as bootstrap applies these styles too */
}

  </style>

</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{URL::asset('assets/images/logo.svg')}}" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5 pl-37">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/dashboard"><img src="{{URL::asset('assets/images/logo.svg')}}" width="30" alt="Oreo"><span class="m-l-10">{{$comp}}</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="hidden-md-down"><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li class="hidden-md-down"><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="/contact" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu pullDown">
                <li class="body">
                    <ul class="menu list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object w60" src="../assets/images/image-gallery/1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">For Sale</span></span>
                                        <span class="message">Relaxing Apartment</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object w60" src="../assets/images/image-gallery/2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <span class="time">For Rent</span></span>
                                        <span class="message">Co-op Apartment in Bay Terrace</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object w60" src="../assets/images/image-gallery/3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella <span class="time">For Rent</span></span>
                                        <span class="message">A must see Villa on Chicago Ave</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object w60" src="../assets/images/image-gallery/4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <span class="time">For Sale</span></span>
                                        <span class="message">5 Room Apartment Special Deal</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object w60" src="../assets/images/image-gallery/5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <span class="time">For Rent</span></span>
                                        <span class="message">Real House Luxury Villa</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>
            </ul>
        </li>
        <li class="hidden-sm-down">

        </li>
        <li class="float-right">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
    </ul>
</nav>


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs ml-4">
        {{-- <!--<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="/dashboard"><i class="zmdi zmdi-home m-r-5"></i>{{$comp}}</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user"><i class="zmdi zmdi-account m-r-5"></i>Agent</a></li>--> --}}
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu p-3 pt-0 header_type">

                <div class="back_btn">
                    <button><i class="zmdi zmdi-arrow-left"></i> Back</button>
                </div>
               <div class="d-flex justify-content-between align-items-center">
                   <h6>Hide already seen</h6>
                   <button onclick="buttonToggle()" class="toggle_btn">
                   <span class="back"></span>
                       <span id="dot" class="dot"></span>
                   </button>
               </div>
{{-- <hr> --}}
               <div class="budget">
                    <div onclick="filterToggle('budgetContent', 'icon1')" class="my-3 cursor-pointer">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0">Budget</h6>
                            <i id="icon1" class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div id="budgetContent">
                        {{-- <div class="d-flex align-items-center justify-content-between"> --}}
                            <select name="minBudget" id="min">
                                <option class="bdf__optionSel">Min Budget</option><option name="budget_min" class="" data-val="2">5 Lacs</option><option name="budget_min" class="" data-val="3">10 Lacs</option><option name="budget_min" class="" data-val="4">15 Lacs</option><option name="budget_min" class="" data-val="5">20 Lacs</option><option name="budget_min" class="" data-val="6">25 Lacs</option><option name="budget_min" class="" data-val="7">30 Lacs</option><option name="budget_min" class="" data-val="118">35 Lacs</option><option name="budget_min" class="" data-val="8">40 Lacs</option><option name="budget_min" class="" data-val="120">45 Lacs</option><option name="budget_min" class="" data-val="9">50 Lacs</option><option name="budget_min" class="" data-val="122">55 Lacs</option><option name="budget_min" class="" data-val="10">60 Lacs</option><option name="budget_min" class="" data-val="124">65 Lacs</option><option name="budget_min" class="" data-val="125">70 Lacs</option><option name="budget_min" class="" data-val="11">75 Lacs</option><option name="budget_min" class="" data-val="127">80 Lacs</option><option name="budget_min" class="" data-val="128">85 Lacs</option><option name="budget_min" class="" data-val="12">90 Lacs</option><option name="budget_min" class="" data-val="130">95 Lacs</option><option name="budget_min" class="" data-val="13">1 Crore</option><option name="budget_min" class="" data-val="132">1.05 Crores</option><option name="budget_min" class="" data-val="133">1.1 Crores</option><option name="budget_min" class="" data-val="134">1.15 Crores</option><option name="budget_min" class="" data-val="135">1.2 Crores</option><option name="budget_min" class="" data-val="136">1.25 Crores</option><option name="budget_min" class="" data-val="137">1.3 Crores</option><option name="budget_min" class="" data-val="138">1.35 Crores</option><option name="budget_min" class="" data-val="139">1.4 Crores</option><option name="budget_min" class="" data-val="140">1.45 Crores</option><option name="budget_min" class="" data-val="14">1.5 Crores</option><option name="budget_min" class="" data-val="142">1.55 Crores</option><option name="budget_min" class="" data-val="143">1.6 Crores</option><option name="budget_min" class="" data-val="144">1.65 Crores</option><option name="budget_min" class="" data-val="145">1.7 Crores</option><option name="budget_min" class="" data-val="146">1.75 Crores</option><option name="budget_min" class="" data-val="147">1.8 Crores</option><option name="budget_min" class="" data-val="148">1.85 Crores</option><option name="budget_min" class="" data-val="149">1.9 Crores</option><option name="budget_min" class="" data-val="15">2 Crores</option><option name="budget_min" class="" data-val="151">2.1 Crores</option><option name="budget_min" class="" data-val="152">2.2 Crores</option><option name="budget_min" class="" data-val="153">2.3 Crores</option><option name="budget_min" class="" data-val="153">2.3 Crores</option><option name="budget_min" class="" data-val="154">2.4 Crores</option><option name="budget_min" class="" data-val="155">2.5 Crores</option><option name="budget_min" class="" data-val="156">2.6 Crores</option><option name="budget_min" class="" data-val="157">2.7 Crores</option><option name="budget_min" class="" data-val="158">2.8 Crores</option><option name="budget_min" class="" data-val="159">2.9 Crores</option><option name="budget_min" class="" data-val="16">3 Crores</option><option name="budget_min" class="" data-val="160">3.1 Crores</option><option name="budget_min" class="" data-val="161">3.2 Crores</option><option name="budget_min" class="" data-val="162">3.3 Crores</option><option name="budget_min" class="" data-val="163">3.4 Crores</option><option name="budget_min" class="" data-val="164">3.5 Crores</option><option name="budget_min" class="" data-val="165">3.6 Crores</option><option name="budget_min" class="" data-val="166">3.7 Crores</option><option name="budget_min" class="" data-val="167">3.8 Crores</option><option name="budget_min" class="" data-val="168">3.9 Crores</option><option name="budget_min" class="" data-val="169">4 Crores</option><option name="budget_min" class="" data-val="170">4.1 Crores</option><option name="budget_min" class="" data-val="171">4.2 Crores</option><option name="budget_min" class="" data-val="172">4.3 Crores</option><option name="budget_min" class="" data-val="173">4.4 Crores</option><option name="budget_min" class="" data-val="174">4.5 Crores</option><option name="budget_min" class="" data-val="175">4.6 Crores</option><option name="budget_min" class="" data-val="176">4.7 Crores</option><option name="budget_min" class="" data-val="177">4.8 Crores</option><option name="budget_min" class="" data-val="178">4.9 Crores</option><option name="budget_min" class="" data-val="17">5 Crores</option><option name="budget_min" class="" data-val="179">5.25 Crores</option><option name="budget_min" class="" data-val="180">5.5 Crores</option><option name="budget_min" class="" data-val="181">5.75 Crores</option><option name="budget_min" class="" data-val="182">6 Crores</option><option name="budget_min" class="" data-val="183">6.25 Crores</option><option name="budget_min" class="" data-val="184">6.5 Crores</option><option name="budget_min" class="" data-val="185">6.75 Crores</option><option name="budget_min" class="" data-val="186">7 Crores</option><option name="budget_min" class="" data-val="187">7.25 Crores</option><option name="budget_min" class="" data-val="188">7.5 Crores</option><option name="budget_min" class="" data-val="189">7.75 Crores</option><option name="budget_min" class="" data-val="190">8 Crores</option><option name="budget_min" class="" data-val="191">8.25 Crores</option><option name="budget_min" class="" data-val="192">8.5 Crores</option><option name="budget_min" class="" data-val="193">8.75 Crores</option><option name="budget_min" class="" data-val="194">9 Crores</option><option name="budget_min" class="" data-val="195">9.25 Crores</option><option name="budget_min" class="" data-val="196">9.5 Crores</option><option name="budget_min" class="" data-val="197">9.75 Crores</option><option name="budget_min" class="" data-val="18">10 Crores</option><option name="budget_min" class="" data-val="19">20 Crores</option><option name="budget_min" class="" data-val="20">30 Crores</option><option name="budget_min" class="" data-val="21">40 Crores</option><option name="budget_min" class="" data-val="22">50 Crores</option><option name="budget_min" class="" data-val="23">60 Crores</option><option name="budget_min" class="" data-val="24">70 Crores</option><option name="budget_min" class="" data-val="25">80 Crores</option><option name="budget_min" class="" data-val="26">90 Crores</option><option name="budget_min" class="" data-val="27">100 Crores</option><option name="budget_min" class="" data-val="28">100+ Crores</option>
                            </select>
                            <select name="minBudget" id="max">
                                <option class="bdf__optionSel">Max Budget</option><option name="budget_max" class="" data-val="2">5 Lacs</option><option name="budget_max" class="" data-val="3">10 Lacs</option><option name="budget_max" class="" data-val="4">15 Lacs</option><option name="budget_max" class="" data-val="5">20 Lacs</option><option name="budget_max" class="" data-val="6">25 Lacs</option><option name="budget_max" class="" data-val="7">30 Lacs</option><option name="budget_max" class="" data-val="118">35 Lacs</option><option name="budget_max" class="" data-val="8">40 Lacs</option><option name="budget_max" class="" data-val="120">45 Lacs</option><option name="budget_max" class="" data-val="9">50 Lacs</option><option name="budget_max" class="" data-val="122">55 Lacs</option><option name="budget_max" class="" data-val="10">60 Lacs</option><option name="budget_max" class="" data-val="124">65 Lacs</option><option name="budget_max" class="" data-val="125">70 Lacs</option><option name="budget_max" class="" data-val="11">75 Lacs</option><option name="budget_max" class="" data-val="127">80 Lacs</option><option name="budget_max" class="" data-val="128">85 Lacs</option><option name="budget_max" class="" data-val="12">90 Lacs</option><option name="budget_max" class="" data-val="130">95 Lacs</option><option name="budget_max" class="" data-val="13">1 Crore</option><option name="budget_max" class="" data-val="132">1.05 Crores</option><option name="budget_max" class="" data-val="133">1.1 Crores</option><option name="budget_max" class="" data-val="134">1.15 Crores</option><option name="budget_max" class="" data-val="135">1.2 Crores</option><option name="budget_max" class="" data-val="136">1.25 Crores</option><option name="budget_max" class="" data-val="137">1.3 Crores</option><option name="budget_max" class="" data-val="138">1.35 Crores</option><option name="budget_max" class="" data-val="139">1.4 Crores</option><option name="budget_max" class="" data-val="140">1.45 Crores</option><option name="budget_max" class="" data-val="14">1.5 Crores</option><option name="budget_max" class="" data-val="142">1.55 Crores</option><option name="budget_max" class="" data-val="143">1.6 Crores</option><option name="budget_max" class="" data-val="144">1.65 Crores</option><option name="budget_max" class="" data-val="145">1.7 Crores</option><option name="budget_max" class="" data-val="146">1.75 Crores</option><option name="budget_max" class="" data-val="147">1.8 Crores</option><option name="budget_max" class="" data-val="148">1.85 Crores</option><option name="budget_max" class="" data-val="149">1.9 Crores</option><option name="budget_max" class="" data-val="15">2 Crores</option><option name="budget_max" class="" data-val="151">2.1 Crores</option><option name="budget_max" class="" data-val="152">2.2 Crores</option><option name="budget_max" class="" data-val="153">2.3 Crores</option><option name="budget_max" class="" data-val="153">2.3 Crores</option><option name="budget_max" class="" data-val="154">2.4 Crores</option><option name="budget_max" class="" data-val="155">2.5 Crores</option><option name="budget_max" class="" data-val="156">2.6 Crores</option><option name="budget_max" class="" data-val="157">2.7 Crores</option><option name="budget_max" class="" data-val="158">2.8 Crores</option><option name="budget_max" class="" data-val="159">2.9 Crores</option><option name="budget_max" class="" data-val="16">3 Crores</option><option name="budget_max" class="" data-val="160">3.1 Crores</option><option name="budget_max" class="" data-val="161">3.2 Crores</option><option name="budget_max" class="" data-val="162">3.3 Crores</option><option name="budget_max" class="" data-val="163">3.4 Crores</option><option name="budget_max" class="" data-val="164">3.5 Crores</option><option name="budget_max" class="" data-val="165">3.6 Crores</option><option name="budget_max" class="" data-val="166">3.7 Crores</option><option name="budget_max" class="" data-val="167">3.8 Crores</option><option name="budget_max" class="" data-val="168">3.9 Crores</option><option name="budget_max" class="" data-val="169">4 Crores</option><option name="budget_max" class="" data-val="170">4.1 Crores</option><option name="budget_max" class="" data-val="171">4.2 Crores</option><option name="budget_max" class="" data-val="172">4.3 Crores</option><option name="budget_max" class="" data-val="173">4.4 Crores</option><option name="budget_max" class="" data-val="174">4.5 Crores</option><option name="budget_max" class="" data-val="175">4.6 Crores</option><option name="budget_max" class="" data-val="176">4.7 Crores</option><option name="budget_max" class="" data-val="177">4.8 Crores</option><option name="budget_max" class="" data-val="178">4.9 Crores</option><option name="budget_max" class="" data-val="17">5 Crores</option><option name="budget_max" class="" data-val="179">5.25 Crores</option><option name="budget_max" class="" data-val="180">5.5 Crores</option><option name="budget_max" class="" data-val="181">5.75 Crores</option><option name="budget_max" class="" data-val="182">6 Crores</option><option name="budget_max" class="" data-val="183">6.25 Crores</option><option name="budget_max" class="" data-val="184">6.5 Crores</option><option name="budget_max" class="" data-val="185">6.75 Crores</option><option name="budget_max" class="" data-val="186">7 Crores</option><option name="budget_max" class="" data-val="187">7.25 Crores</option><option name="budget_max" class="" data-val="188">7.5 Crores</option><option name="budget_max" class="" data-val="189">7.75 Crores</option><option name="budget_max" class="" data-val="190">8 Crores</option><option name="budget_max" class="" data-val="191">8.25 Crores</option><option name="budget_max" class="" data-val="192">8.5 Crores</option><option name="budget_max" class="" data-val="193">8.75 Crores</option><option name="budget_max" class="" data-val="194">9 Crores</option><option name="budget_max" class="" data-val="195">9.25 Crores</option><option name="budget_max" class="" data-val="196">9.5 Crores</option><option name="budget_max" class="" data-val="197">9.75 Crores</option><option name="budget_max" class="" data-val="18">10 Crores</option><option name="budget_max" class="" data-val="19">20 Crores</option><option name="budget_max" class="" data-val="20">30 Crores</option><option name="budget_max" class="" data-val="21">40 Crores</option><option name="budget_max" class="" data-val="22">50 Crores</option><option name="budget_max" class="" data-val="23">60 Crores</option><option name="budget_max" class="" data-val="24">70 Crores</option><option name="budget_max" class="" data-val="25">80 Crores</option><option name="budget_max" class="" data-val="26">90 Crores</option><option name="budget_max" class="" data-val="27">100 Crores</option><option name="budget_max" class="" data-val="28">100+ Crores</option>
                            </select>
                        {{-- </div> --}}
                    </div>
               </div>
<hr>
               <div class="bedroom">
                <div onclick="filterToggle('bedroom_content', 'icon2')" class="my-3 cursor-pointer">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="m-0">No. of Bedrooms</h6>
                        <i id="icon2" class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div id="bedroom_content">
                    <div class="row">
                        <div class="col-6 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>1RK/ 1BHK</p>
                            </div>
                        </div>
                        <div class="col-6 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>2BHK</p>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-4 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>3BHK</p>
                            </div>
                        </div>
                        <div class="col-4 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>4BHK</p>
                            </div>
                        </div>
                        <div class="col-4 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>5BHK</p>
                            </div>
                        </div>
                    </div>
                    <button id="button1" class="moreBtn" onclick="propertyTagToggle('button1','filterData1')">+5 More</button>
                    <div id="filterData1" class="d-none">
                    <div class="row my-3">
                        <div class="col-4 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>6BHK</p>
                            </div>
                        </div>
                        <div class="col-4 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>7BHK</p>
                            </div>
                        </div>
                        <div class="col-4 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>8BHK</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>9BHK</p>
                            </div>
                        </div>
                        <div class="col-6 px-1">
                            <div class="wrap d-flex align-items-center justify-content-center">
                                <i class="zmdi zmdi-plus"></i>
                                <p>9+ BHK</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               </div>
<hr>
               <div class="propertyType" id="propertyType">
                <div onclick="filterToggle('propertyContent','icon3')" class="my-3 cursor-pointer">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Property Type</h6>
                        <i id="icon3" class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div id="propertyContent">
                    <div id="true" class="wrap d-flex align-items-center my-2">
                        <i class="zmdi zmdi-plus"></i>
                        <p>Residential Apartment</p>
                    </div>
                    <div id="true" class="wrap d-flex align-items-center my-2">
                        <i class="zmdi zmdi-plus"></i>
                        <p>Independent/Builder Floor</p>
                    </div>
                    <div id="true" class="wrap d-flex align-items-center my-2">
                        <i class="zmdi zmdi-plus"></i>
                        <p>Residential Land</p>
                    </div>
                    <div id="true" class="wrap d-flex align-items-center my-2">
                        <i class="zmdi zmdi-plus"></i>
                        <p>Independent House/Villa</p>
                    </div>
                    <button id="button2" class="moreBtn" onclick="propertyTagToggle('button2','filterData2')">+3 More</button>
                    <div class="d-none" id="filterData2">
                    <div id="true" class="wrap d-flex align-items-center my-2">
                        <i class="zmdi zmdi-plus"></i>
                        <p>Farm House</p>
                    </div>
                        <div id="true" class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Studio Apartment</p>
                        </div>
                        <div id="true" class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Serviced Apartments</p>
                        </div>
                    </div>
                </div>
               </div>
<hr>
               <div class="area">
                <div onclick="filterToggle('areaContent','icon4')" class="my-3 cursor-pointer">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="m-0">Area </h6>
                        <i id="icon4" class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div id="areaContent">
                    <select name="minArea" id="minArea">
                        <option class="bdf__optionSel">Min Area</option><option name="area_min" class="" data-val="100">100</option><option name="area_min" class="" data-val="200">200</option><option name="area_min" class="" data-val="300">300</option><option name="area_min" class="" data-val="400">400</option><option name="area_min" class="" data-val="500">500</option><option name="area_min" class="" data-val="600">600</option><option name="area_min" class="" data-val="700">700</option><option name="area_min" class="" data-val="800">800</option><option name="area_min" class="" data-val="900">900</option><option name="area_min" class="" data-val="1000">1000</option><option name="area_min" class="" data-val="1100">1100</option><option name="area_min" class="" data-val="1200">1200</option><option name="area_min" class="" data-val="1300">1300</option><option name="area_min" class="" data-val="1400">1400</option><option name="area_min" class="" data-val="1500">1500</option><option name="area_min" class="" data-val="1600">1600</option><option name="area_min" class="" data-val="1700">1700</option><option name="area_min" class="" data-val="1800">1800</option><option name="area_min" class="" data-val="1900">1900</option><option name="area_min" class="" data-val="2000">2000</option><option name="area_min" class="" data-val="2100">2100</option><option name="area_min" class="" data-val="2200">2200</option><option name="area_min" class="" data-val="2300">2300</option><option name="area_min" class="" data-val="2400">2400</option><option name="area_min" class="" data-val="2500">2500</option><option name="area_min" class="" data-val="2600">2600</option><option name="area_min" class="" data-val="2700">2700</option><option name="area_min" class="" data-val="2800">2800</option><option name="area_min" class="" data-val="2900">2900</option><option name="area_min" class="" data-val="3000">3000</option><option name="area_min" class="" data-val="3100">3100</option><option name="area_min" class="" data-val="3200">3200</option><option name="area_min" class="" data-val="3300">3300</option><option name="area_min" class="" data-val="3400">3400</option><option name="area_min" class="" data-val="3500">3500</option><option name="area_min" class="" data-val="3600">3600</option><option name="area_min" class="" data-val="3700">3700</option><option name="area_min" class="" data-val="3800">3800</option><option name="area_min" class="" data-val="3900">3900</option><option name="area_min" class="" data-val="4000">4000</option>
                    </select>
                    <select name="maxArea" id="amaxArea">
                        <option class="bdf__optionSel">Min Area</option><option name="area_min" class="" data-val="200">200</option><option name="area_min" class="" data-val="300">300</option><option name="area_min" class="" data-val="400">400</option><option name="area_min" class="" data-val="500">500</option><option name="area_min" class="" data-val="600">600</option><option name="area_min" class="" data-val="700">700</option><option name="area_min" class="" data-val="800">800</option><option name="area_min" class="" data-val="900">900</option><option name="area_min" class="" data-val="1000">1000</option><option name="area_min" class="" data-val="1100">1100</option><option name="area_min" class="" data-val="1200">1200</option><option name="area_min" class="" data-val="1300">1300</option><option name="area_min" class="" data-val="1400">1400</option><option name="area_min" class="" data-val="1500">1500</option><option name="area_min" class="" data-val="1600">1600</option><option name="area_min" class="" data-val="1700">1700</option><option name="area_min" class="" data-val="1800">1800</option><option name="area_min" class="" data-val="1900">1900</option><option name="area_min" class="" data-val="2000">2000</option><option name="area_min" class="" data-val="2100">2100</option><option name="area_min" class="" data-val="2200">2200</option><option name="area_min" class="" data-val="2300">2300</option><option name="area_min" class="" data-val="2400">2400</option><option name="area_min" class="" data-val="2500">2500</option><option name="area_min" class="" data-val="2600">2600</option><option name="area_min" class="" data-val="2700">2700</option><option name="area_min" class="" data-val="2800">2800</option><option name="area_min" class="" data-val="2900">2900</option><option name="area_min" class="" data-val="3000">3000</option><option name="area_min" class="" data-val="3100">3100</option><option name="area_min" class="" data-val="3200">3200</option><option name="area_min" class="" data-val="3300">3300</option><option name="area_min" class="" data-val="3400">3400</option><option name="area_min" class="" data-val="3500">3500</option><option name="area_min" class="" data-val="3600">3600</option><option name="area_min" class="" data-val="3700">3700</option><option name="area_min" class="" data-val="3800">3800</option><option name="area_min" class="" data-val="3900">3900</option><option name="area_min" class="" data-val="4000">4000</option>
                    </select>
                </div>
               </div>
<hr>
               <div class="localitis">
                    <div onclick="filterToggle('localitisContent','icon5')" class="my-3 cursor-pointer">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0">Localities</h6>
                            <i id="icon5" class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div id="localitisContent">
                        <div class="d-flex align-items-center my-2">
                            <input type="checkbox" name="c1" id="c1">
                            <label for="c1">Golf Course Ext. Road</label>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <input type="checkbox" name="c2" id="c2">
                            <label for="c2">New Gurgaon</label>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <input type="checkbox" name="c3" id="c3">
                            <label for="c3">Dwarka Expressway Gurgaon</label>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <input type="checkbox" name="c4" id="c4">
                            <label for="c4">Sohna Road</label>
                        </div>
                        <div class="d-flex align-items-center my-2">
                            <input type="checkbox" name="c5" id="c5">
                            <label for="c5">Sector-65 Gurgaon</label>
                        </div>
                    </div>
               </div>
<hr>
               <div class="constraction">
                    <div onclick="filterToggle('constractionContent','icon6')" class="my-3 cursor-pointer">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0">Construction Status</h6>
                            <i id="icon6" class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div id="constractionContent">
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Ready to move</p>
                        </div>
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Under Construction</p>
                        </div>
                    </div>
               </div>
<hr>
               <div class="furnishedStatus">
                    <div onclick="filterToggle('furnishedContent','icon7')" class="my-3 cursor-pointer">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0">Construction Status</h6>
                            <i id="icon7" class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div id="furnishedContent">
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Semifurnished</p>
                        </div>
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Unfurnished</p>
                        </div>
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Furnished</p>
                        </div>
                    </div>
               </div>
<hr>
               <div class="purchaseType">
                    <div onclick="filterToggle('purchaseTypeContent','icon8')" class="my-3 cursor-pointer">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0">Purchase type</h6>
                            <i id="icon8" class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div id="purchaseTypeContent">
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>Resale</p>
                        </div>
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>New Booking</p>
                        </div>
                    </div>
               </div>
<hr>
               <div class="approveStatus">
                    <div onclick="filterToggle('approveStatusContent','icon9')" class="my-3 cursor-pointer">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="m-0">RERA Approved</h6>
                            <i id="icon9" class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div id="approveStatusContent">
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>RERA approved properties</p>
                        </div>
                        <div class="wrap d-flex align-items-center my-2">
                            <i class="zmdi zmdi-plus"></i>
                            <p>RERA registered dealers</p>
                        </div>
                    </div>
               </div>

            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile.html"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                            <div class="detail">
                                <h4>Michael</h4>
                                <small>Agent</small>
                            </div>
                            <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div class="row">
                                <div class="col-4">
                                    <h6 class="mb-1">852</h6>
                                    <small>Deals</small>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-1">13k</h6>
                                    <small>Sales</small>
                                </div>
                                <div class="col-4">
                                    <h6 class="mb-1">234</h6>
                                    <small>Clients</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Email address: </small>
                        <p>michael@gmail.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div>Honesty & Integrity</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Responsiveness</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Local Knowledge</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple" class="active"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                    </ul>
                </div>
                <div class="card theme-light-dark">
                    <h6>Left Menu</h6>
                    <button class="t-light btn btn-default btn-simple btn-round btn-block">Light</button>
                    <button class="t-dark btn btn-default btn-round btn-block">Dark</button>
					<button class="m_img_btn btn btn-primary btn-round btn-block">Sidebar Image</button>
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Report Panel Usage</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked="">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Account Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox6" type="checkbox" checked="">
                                <label for="checkbox6">Location Permission</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Information Summary</h6>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">MEMORY USAGE</small>
                            <h5 class="m-b-0 h6">512</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#00ced1">8,7,9,5,6,4,6,8</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">CPU USAGE</small>
                            <h5 class="m-b-0 h6">90%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#F15F79">6,5,8,2,6,4,6,4</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">
                            <small class="displayblock">DAILY TRAFFIC</small>
                            <h5 class="m-b-0 h6">25 142</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#78b83e">7,5,8,7,4,2,6,5</div>
                        </div>
                    </div>
                    <div class="row m-b-40">
                        <div class="col-7">
                            <small class="displayblock">DISK USAGE</small>
                            <h5 class="m-b-0 h6">60.10%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#457fca">7,5,2,5,6,7,6,4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane right_chat stretchLeft" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <div class="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia</span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson</span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">John</span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander</span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Contacts</h6>
                    <ul class="list-unstyled">
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar10.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar7.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar8.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar9.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane slideLeft" id="activity">
            <div class="slim_scroll">
                <div class="card user_activity">
                    <h6>Recent Activity</h6>
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar4.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Admin Birthday</h5>
                                <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar5.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Add New Contact</h5>
                                <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small><strong>E:</strong> maryamamiri@gmail.com</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar6.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Code Change</h5>
                                <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="../assets/images/xs/avatar7.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">New Email</h5>
                                <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent Attachments</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-pdf l-blush"></i>
                                <div class="info">
                                    <h4>info_258.pdf</h4>
                                    <small>2MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>
                                <div class="info">
                                    <h4>newdoc_214.doc</h4>
                                    <small>900KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>
                                <div class="info">
                                    <h4>MG_4145.jpg</h4>
                                    <small>5.6MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>
                                <div class="info">
                                    <h4>MG_4100.jpg</h4>
                                    <small>5MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>
                                <div class="info">
                                    <h4>Reports_end.doc</h4>
                                    <small>780KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-videocam l-turquoise"></i>
                                <div class="info">
                                    <h4>movie2018.MKV</h4>
                                    <small>750MB</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>

<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Agent Team</h2></li>
                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                <li><img src="../assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                <li><a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a></li>
            </ul>
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="javascript:void(0);">Alexander</a>
                        <span class="datetime">6:12</span>
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div>

<div id="content">

    @yield('content')
</div>

<!-- Jquery Core Js -->
<script src="{{URL::asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{URL::asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/dropzone/dropzone.js')}}"></script>
<script src="{{URL::asset('assets/bundles/mainscripts.bundle.js')}}"></script>

<script src="{{URL::asset('assets/js/c3.bundle.js')}}"></script>
<script src="{{URL::asset('assets/bundles/c3.bundle.js')}}"></script>
<script src="{{URL::asset('assets/bundles/jvectormap.bundle.js')}}"></script>
<script src="{{URL::asset('assets/bundles/knob.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/ijabocrop/ijaboCropTool.min.js')}}"></script>


<script src="{{URL::asset('assets/js/pages/index.js')}}"></script>
@yield('scripts')
@yield('scriptsc')
@yield('scriptp')

</body>
</html>
