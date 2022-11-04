<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="RealEstate, Admin, Dashboard, template, UI kit, RealEstate Admin, Bootstrap 4x">
<meta name="author" content="Thememakker">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Propertymitr RealEstate :: Sign Up</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/authentication.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">

    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body class="theme-purple authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">
        <div class="navbar-translate n_logo">
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">


                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="/login">SIGN IN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">

                    <div class="header">
                        <div class="logo-container">
                            <img src="../assets/images/logo.svg" alt="">
                        </div>
                        <h5>Sign Up</h5>
                        <span>Register </span>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden"  name="companyid">
                        <input type="hidden"  id="companyinit" name="companyinitials">
                        <input type="hidden"  id="userid" name="userid">

                        <div class="input-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="User Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" placeholder="Company Name" name="company" value="{{ old('company') }}" required autocomplete="company">
                                @error('company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-home"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>

                    <div class="checkbox">
                            <input id="terms" type="checkbox"required>
                            <label for="terms">
                                    I read and agree to the <a href="{{url('/terms')}}">terms of usage</a>
                            </label>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" onclick="getInputValue();" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">SIGN UP
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        {{-- footer --}}
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});

function getInputValue(){
            // Selecting the input element and get its value
            var inputVal = document.getElementById("company").value;
            var inputId = document.getElementById("company").value;

            // Displaying the value
            let acronym = inputVal.split(/\s/).reduce((response,word)=> response+=word.slice(0,1),'')
            console.log(acronym);
            document.getElementById("companyinit").value = acronym;
        }

</script>
</body>
</html>
