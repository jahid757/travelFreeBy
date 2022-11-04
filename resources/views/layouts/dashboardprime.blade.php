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

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<!-- Custom Css -->

<link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">

<link rel="stylesheet" href="{{URL::asset('assets/css/color_skins.css')}}">
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
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/dashboard"><img src="{{URL::asset('assets/images/logo.svg')}}" width="30" alt="Oreo"><span class="m-l-10">{{$compn}}</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="hidden-md-down"><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
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
        <li class="float-right mr-3">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs ml-4">
        <!--<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="/dashboard"><i class="zmdi zmdi-home m-r-5"></i>{{$compn}}</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user"><i class="zmdi zmdi-account m-r-5"></i>Agent</a></li>-->
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="{{route('users.show', (Auth::user()->id))}}" ><img src="{{ asset('storage/profileimages/' . (Auth::user()->file)) }}" alt="Logo"></a></div>
                            <div class="detail">
                                <a href="{{route('users.show', (Auth::user()->id))}}"><h4>{{$name}}</h4></a>
                                <small>{{$role}}</small>
                            </div>
                            <a title="facebook" href="{{$facebook}}" target="_blank"> <i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="{{$twitter}}"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="{{$insta}}"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </li>
                    <li class="active open mt-1"><a href="/dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-trending-up"></i><span>Leads</span></a>
                        <ul class="ml-menu">
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="/leads/flights"><i class="zmdi zmdi-airplane"></i><span>Flights</span></a>
                                <a href="/leads/flights/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="/leads/hotels"><i class="zmdi zmdi-hotel"></i><span>Hotels</span></a>
                                <a href="/leads/hotels/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="/leads/packages"><i class="zmdi zmdi-assignment"></i><span>Packages</span></a>
                                <a href="/leads/packages/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                            </li>
                                </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Transactions</span></a>
                        <ul class="ml-menu">
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="/transactions/flights"><i class="zmdi zmdi-airplane"></i><span>Flights</span></a>
                                <a href="/transactions/flights/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="/transactions/hotels"><i class="zmdi zmdi-hotel"></i><span>Hotels</span></a>
                                <a href="/transactions/hotels/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="/transactions/packages"><i class="zmdi zmdi-assignment"></i><span>Packages</span></a>
                                <a href="/transactions/packages/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                            </li>
        
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Customers</span></a>
                        <ul class="ml-menu">
                          <li class="d-flex align-items-center justify-content-between">
                            <a href="/customers"><i class="zmdi zmdi-assignment"></i><span>Customers</span></a>
                            <a href="/customers/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                          </li>
                        </ul>
                    </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Corporates</span></a>
                        <ul class="ml-menu">
                            <li class="d-flex align-items-center justify-content-between">
                              <a href="/corpoates"><i class="zmdi zmdi-assignment"></i><span>Corporates</span></a>
                              <a href="/corporates/create" class="p-0" href="javascript:void(0);"><i class="zmdi zmdi-plus"></i></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts"></i><span>Agents</span></a>
                        <ul class="ml-menu">
                            <li class="d-flex justify-content-between pr-1 align-items-center"><a href="/admin/users">All Agents</a><span><i class="zmdi zmdi-plus"></i></span></li>
                            <li><a href="{{route('users.show', (Auth::user()->id))}}">My Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-case-check"></i><span>Contract</span></a>
                        <ul class="ml-menu">
                            <li class="d-flex justify-content-between pr-1 align-items-center"><a href="contract-list.html">List</a><span><i class="zmdi zmdi-plus"></i></span></li>
                        </ul>
                    </li>

                    
                    <li class="header">EXTRA COMPONENTS</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Events</span></a>
                        <ul class="ml-menu">
                            <li><a href="My Calender">Today</a></li>
                            <li><a href="alerts.html">Day</a></li>
                            <li><a href="collapse.html">Week</a></li>
                            <li><a href="colors.html">Month</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Company Book</span></a>
                        <ul class="ml-menu">
                            <li><a href="basic-form-elements.html">Company Name Book</a> </li>
                        </ul>
                    </li>

                    <li class="header">Extra</li>
                    <li>
                        <div class="progress-container progress-primary m-t-10">
                            <span class="progress-badge">Sales this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                    <span class="progress-value">67%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-danger">
                            <span class="progress-badge">Leads this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Clients this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
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
                                <small>Agents</small>
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


<!-- Chat-launcher -->
<div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Agents Team</h2></li>
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
