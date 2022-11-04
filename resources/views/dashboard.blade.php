
@extends('layouts.dashboardprime')

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Dashboard
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
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{$compn}}</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="mt-0">Properties</h5>
                                <span class="badge badge-danger">Sold 22</span>
                                <span class="badge badge-success">New 40</span>
                            </div>
                            <div>
                                <h2 class="mb-0">62</h2>
                            </div>
                        </div>
                        <span id="linecustom1">1,4,2,6,5,2,3,8,5,2</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="mt-0">Sellers</h5>                                
                                <span class="badge badge-success">Active 13</span>
                                <span class="badge badge-danger">Inactive 7</span>
                            </div>
                            <div>
                                <h2 class="mb-0">20</h2>
                            </div>
                        </div>
                        <span id="linecustom2">2,9,5,5,8,5,4,2,6</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="mt-0">Buyers</h5>
                                <span class="badge badge-success">Active 45</span>
                                <span class="badge badge-danger">Inactive 25</span>
                            </div>
                            <div>
                                <h2 class="mb-0">70</h2>
                            </div>
                        </div>
                        <span id="linecustom3">1,5,3,6,6,3,6,8,4,2</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h5 class="mt-0">Transactions</h5>
                                <span class="badge badge-success">USD. $40M</span>
                                <span class="badge badge-danger">RS. 50K</span>
                            </div>
                            <div>
                                <h2 class="mb-0">$43M</h2>
                            </div>
                        </div>
                        <span id="linecustom4">1,5,3,6,6,3,6,8,4,2</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xl-4 col-lg-5 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Total</strong> Properties</h2>
                    </div>
                    <div class="body text-center">
                        <div id="c3chart-properties"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Graph</strong> this year</h2>
                    </div>
                    <div class="body">
                        <div id="chart-bar-rotated"></div>
                    </div>
                </div>                
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="card text-center">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-eye col-amber zmdi-hc-2x"></i>
                                <h4 class="mb-0">15,453</h4>
                                <span>View</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-thumb-up col-blue zmdi-hc-2x"></i>
                                <h4 class="mb-0">921</h4>
                                <span>Likes</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-comment-text col-red zmdi-hc-2x"></i>
                                <h4 class="mb-0">215</h4>
                                <span>Comments</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="body">
                                <i class="zmdi zmdi-account text-success zmdi-hc-2x"></i>
                                <h4 class="mb-0">2,55</h4>
                                <span>Total Agent</span>
                            </div>
                        </div>                      
                    </div>
                </div>
                <div class="card tasks_report">
                    <div class="header">
                        <h2><strong>Total</strong> Revenue</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">2017 Year</a></li>
                                    <li><a href="javascript:void(0);">2016 Year</a></li>
                                    <li><a href="javascript:void(0);">2015 Year</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-6 text-center">
                                <h4 class="margin-0">Total Sale</h4>
                                <h6 class="m-b-20">2,45,124</h6>
                                <input type="text" class="knob dial1" value="66" data-width="100" data-height="100" data-thickness="0.1" data-fgColor="#212121" readonly>
                                <h6 class="m-t-20">Satisfaction Rate</h6>
                                <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                                <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="35px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#212121">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="top-report mb-4">
                                    <h3 class="mt-0 mb-0">240 <i class="zmdi zmdi-trending-up float-right"></i></h3>
                                    <p class="text-muted">New Feedbacks</p>
                                    <div class="progress">
                                        <div class="progress-bar l-blush" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    <small>Change 15%</small>
                                </div>
                                <div class="top-report">
                                    <h3 class="mt-0 mb-0">50.5 Gb <i class="zmdi zmdi-trending-up float-right"></i></h3>
                                    <p class="text-muted">Traffic this month</p>
                                    <div class="progress">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    <small>Change 5%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Visitors</strong> Statistics</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>                        
                    </div>
                    <div class="body">
                        <div id="world-map-markers" class="text-center" style="height: 350px;" class="mb-3"></div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="progress-container">
                                    <span class="progress-badge">visitor from america</span>
                                    <div class="progress">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from Canada</span>
                                    <div class="progress">
                                        <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from Germany</span>
                                    <div class="progress">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="progress-container">
                                    <span class="progress-badge">visitor from UK</span>
                                    <div class="progress">
                                        <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from India</span>
                                    <div class="progress">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-container m-t-20">
                                    <span class="progress-badge">visitor from Australia</span>
                                    <div class="progress">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                                            <span class="progress-value">86%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Browser</strong> Usage</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="c3chart-Browser-Usage"></div>
                        <table class="table table-striped table-sm mt-3 mb-0">
                            <tbody>
                                <tr>                                   
                                    <td>Chrome</td>
                                    <td>6985</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td>2697</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Safari</td>
                                    <td>3597</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>Firefox</td>
                                    <td>2145</td>
                                    <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                </tr>
                                <tr>
                                    <td>Opera</td>
                                    <td>1854</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr>
                                <tr>
                                    <td>IE</td>
                                    <td>154</td>
                                    <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card weather2">
                    <div class="city-selected body l-khaki">
                        <div class="row">
                            <div class="col-12">
                                <div class="city"><span>City:</span> New York</div>
                                <div class="night">Day - 12:07 PM</div>
                            </div>
                            <div class="info col-7">
                                <div class="temp"><h2>34°</h2></div>									
                            </div>
                            <div class="icon col-5">
                                <img src="../assets/images/weather/summer.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                            <tr>
                            <td>Wind</td>
                            <td class="font-medium">ESE 17 mph</td>
                        </tr>
                        <tr>
                            <td>Humidity</td>
                            <td class="font-medium">72%</td>
                        </tr>
                        <tr>
                            <td>Pressure</td>
                            <td class="font-medium">25.56 in</td>
                        </tr>
                        <tr>
                            <td>Cloud Cover</td>
                            <td class="font-medium">80%</td>
                        </tr>
                        <tr>
                            <td>Ceiling</td>
                            <td class="font-medium">25280 ft</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item text-center active">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Monday</p>
                                            <img src="../assets/images/weather/rain.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Tuesday</p>
                                            <img src="../assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Wednesday</p>
                                            <img src="../assets/images/weather/wind.svg" alt="">
                                        </li>
                                    </ul>
                                </div>                                
                            </div>
                            <div class="carousel-item text-center">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Thursday</p>
                                            <img src="../assets/images/weather/sky.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Friday</p>
                                            <img src="../assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Saturday</p>
                                            <img src="../assets/images/weather/summer.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>							
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection