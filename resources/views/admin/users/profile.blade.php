@extends('layouts.dashboardprime')

@section('content')
<section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Agent Profile
                {{-- <small>Welcome to {{$compn}}</small> --}}
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> {{$compn}}</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 mb-2 position-relative">

                            <form method="POST" enctype="multipart/form-data" id="upload_image_form" action="javascript:void(0)" >
                                @if(empty($user->file))
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2"> <img id="image_preview_container" src="{{ asset('storage/profileimages/avatar-1577909_640.png') }}"
                                            alt="preview image" style="max-height: 90px; max-width: 90px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" class="ml-2" name="image" placeholder="Choose image" id="image" style="color:transparent;"/>
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                @else
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2"> <img id="image_preview_container" src="{{ asset('storage/profileimages/' .$user->file) }}"
                                            alt="preview image" style="max-height: 120px; max-width: 120px;" >
                                        </div>
                                    </div>
                                    <div class="position-absolute profile_img_btn">
                                        <div class="col-md-12">
                                            <div class="form-group ml-4">
                                                <input type="file" class="ml-0" name="image" placeholder="Choose image" id="image" style="color:transparent;"/>
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    {{-- <div class="col-md-12 ml-2"> --}}
                                    {{-- </div> --}}
                                    </div>
                                    @endif




                                </div>
                            </form>

                            </div>
                            <div class="col-md-9 mb-2 pl-4">
                                <h4 class="mb-1"><strong>{{$name}}</strong> Last Name</h4>
                                <p class="mb-2 author_info"><small>Web Developer</small></p>

                                <p class="mb-0 author_info"><small>795 Folsom Ave, Suite 600</small></p>
                                <p class="mb-0 author_info"><small>San Francisco, CARDGE 94107</small></p>
                                <div class="social_link">
                                    <a title="facebook" href="" target="_blank" class=" waves-effect waves-block"> <i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                                    <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-behance"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-md-3 mb-2 position-relative">

                            <form method="POST" enctype="multipart/form-data" id="upload_image_formlogo" action="javascript:void(0)" >
                                @if(empty($user->companylogo))
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2"> <img id="image_preview_containerlogo" src="{{ asset('storage/logoimages/logo.png') }}"
                                            alt="preview image" style="height: 90px; width: 95px;" >
                                        </div>
                                    </div>
                                    <div class="position-absolute profile_img_btn">
                                        <div class="col-md-12">
                                            <div class="form-group ml-4">
                                                <input type="file" class="ml-0" name="imagelogo" placeholder="Choose image" id="imagelogo" style="color:transparent;"/>
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="profile-image float-md-left ml-2"> <img id="image_preview_containerlogo" src="{{ asset('storage/logoimages/' .$user->companylogo) }}"
                                            alt="preview image" style="height: 90px; width: 95px;" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" class="ml-2" name="image" placeholder="Choose image" id="imagelogo" style="color:transparent;"/>
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    @endif

                                    {{-- <div class="col-md-12 ml-2">

                                    </div> --}}



                                </div>
                            </form>

                            </div>
                            <div class="col-md-9 mb-cs-3">
                                <h4 class="mb-1"><strong>{{$compn}}</strong></h4>
                                <p class="mb-2 author_info"><small>Company Tagline Here</small></p>

                                <p class="mb-0 author_info"><small>795 Folsom Ave, Suite 600</small></p>
                                <p class="mb-0 author_info"><small>San Francisco, CARDGE 94107</small></p>
                                <div class="social_link">
                                    <a title="facebook" href="" target="_blank" class=" waves-effect waves-block"> <i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                                    <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-behance"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs d-flex justify-content-between">
                        <div class="header">
                            <h2><strong>Personal</strong> Information</h2>
                        </div>
                        <li class="nav-item"><a id="edit1" onclick="infoToggle('profileInfoEdit','profileInfo','edit1')" class="nav-link active" data-toggle="tab" href="#about">Edit</a></li>
                    </ul>
                    <div class="tab-content">
                        <form class="d-none" id="profileInfoEdit" method="POST" enctype="multipart/form-data" id="update_user" action="javascript:void(0)" >
                            @csrf
                        <div class="tab-pane body active" id="about">
                            <small class="text-muted my-2 d-block">Email address: </small>
                            <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter Your Email">
                            <small class="text-muted my-2 d-block">Age: </small>
                            <input type="number" name="age" value="{{$user->age}}" class="form-control" placeholder="Enter Your Age">
                            <p>{{Auth::user()->age}}</p>
                            <small class="text-muted my-2 d-block">Mobile: </small>
                            <input type="number" name="mobile" value="{{$user->mobile}}" class="form-control" placeholder="Enter Your Mobile">
                            <p>{{Auth::user()->mobile}}</p>

                            <small class="text-muted d-block my-2">Role: </small>
                            <p class="m-b-0">{{$role}}</p>

                        </div>
                        <div class="col-md-12 ml-2 mb-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                        <div class="body" id="profileInfo">
                            <p class="text-muted">Email address:</p>
                            <p>{{$user->email}}</p>
                            <hr>
                            <p class="text-muted">Age:</p>
                            <p>{{$user->age}}</p><hr>
                            <p class="text-muted">Mobile:</p>
                            <p>{{$user->mobile}}</p><hr>
                            <p class="text-muted">Role:</p>
                            <p>{{$role}}</p>
                        </div>
                    </div>
                </div>


                    <div role="tabpanel" class="tab-pane" id="usersettings">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Security</strong> Settings</h2>
                            </div>
                            <form method="POST" enctype="multipart/form-data" id="update_user_password" action="javascript:void(0)" >
                                @csrf
                            <div class="body">
                                <div class="form-group">
                                    <label for="currentpassword">Current Password <span class="red ml-1">*</span></label>
                                    <input id="currentpassword" type="password" name="currentpassword" class="form-control @error('currentpassword') is-invalid @enderror" placeholder="Current Password" required autocomplete="currentpassword">
                                    <span class="passError red" id="currentPassError"></span>
                                    {{-- @error('currentpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror --}}

                                </div>
                                <div class="form-group">
                                    <label for="password">New Password <span class="red ml-1">*</span></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="password">
                                    <span class="passError red" id="passError"></span>
                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm Password <span class="red ml-1">*</span></label>
                                    <input id="confirmpassword" type="password" class="form-control @error('confirmpassword') is-invalid @enderror" placeholder="Confirm Password" name="confirmpassword" required autocomplete="confirmpassword">
                                    {{-- @error('confirmpassword')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                    <span class="passError red" id="confirmPassError"></span>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                        <div class="card">
                            <div class="header">
                                <ul class="nav nav-tabs p-0 d-flex align-items-center justify-content-between">
                                    <h2><strong>Account</strong> Settings</h2>
                                    <li class="nav-item ml-2"><a id="edit2" onclick="infoToggle('companyInfo','companyFixedInfo','edit2')" class="nav-link active" data-toggle="tab" href="#about">Edit</a></li>
                                </ul>
                            </div>
                            {{-- change done --}}
                            <div class="body">
                                <div id="companyInfo" class="row clearfix d-none">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="cname">Company Name<span class="red ml-1">*</span></label>
                                            <input id="cname" type="text" class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="cEmail">Company Email<span class="red ml-1">*</span></label>
                                            <input id="cEmail" type="email" class="form-control" placeholder="Company Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="city">City<span class="red ml-1">*</span></label>
                                            <input id="city" type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="country">Country<span class="red ml-1">*</span></label>
                                            <input id="country" type="text" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="cPhone">Company Phone<span class="red ml-1">*</span></label>
                                            <input id="cPhone" type="text" class="form-control" placeholder="Company Phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="cfb">Company Facebook</label>
                                            <input id="cfb" type="text" class="form-control" placeholder="Company Facebook">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="cins">Company Instagram</label>
                                            <input id="cins" type="text" class="form-control" placeholder="Company Instagram">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label for="cbh">Company Behance</label>
                                            <input id="cbh" type="text" class="form-control" placeholder="Company Behance">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-round">Save Changes</button>
                                    </div>
                                </div>
                                <div id="companyFixedInfo">
                                    <p class="text-muted">Company Name:</p>
                                    <p>{{$compn}}</p> <hr>
                                    <p class="text-muted">Company Email: </p>
                                    <p></p> <hr>
                                    <p class="text-muted">Company Phone: </p>
                                    <p></p>
                                    <hr>
                                    <p class="text-muted">Company Address: </p>
                                    <p></p>
                                    <hr>
                                    <p class="text-muted">Company Social Media: </p>
                                    <div class="social_link mt-2">
                                        <a title="facebook" href="" target="_blank" class=" waves-effect waves-block"> <i class="zmdi zmdi-facebook"></i></a>
                                        <a title="twitter" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter"></i></a>
                                        <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                                        <a title="instagram" href="" class=" waves-effect waves-block"><i class="zmdi zmdi-behance"></i></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="{{URL::asset('assets/js/custom.js')}}"></script>
<script type="text/javascript">

// @Naeem@575 /755@
    $(document).ready(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#image').change(function(){

            let reader = new FileReader();
            reader.onload = (e) => {
              $('#image_preview_container').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);

        });

        $('#upload_image_form').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type:'POST',
                url: "{{ route("save.photo") }}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    location.reload();
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function (e) {

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $('#imagelogo').change(function(){

      let reader = new FileReader();
      reader.onload = (e) => {
        $('#image_preview_containerlogo').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.files[0]);

  });

  $('#upload_image_formlogo').submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);

      $.ajax({
          type:'POST',
          url: "{{ route("save.logo") }}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {
              this.reset();
              location.reload();
          },
          error: function(data){
              console.log(data);
          }
      });
  });
});

$(document).ready(function (e) {

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });


  $('#update_user').submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);

      $.ajax({
          type:'POST',
          url: "{{ route("user.update", $user->id) }}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {
              this.reset();
              location.reload();
          },
          error: function(data){
              console.log(data);
          }
      });
  });

  $('#update_user_password').submit(function(e) {
      e.preventDefault();

      var formData = new FormData(this);

      $.ajax({
          type:'POST',
          url: "{{ route("user.update.password", $user->id) }}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {
              this.reset();
            location.reload();

            swal("Greate","Your Password Is Changed","success",{
                button:"OK",

            })
          },
          error: function(data){
            //   console.log(data);
            if(data.responseJSON){
                console.log(data);
                const currentPassError = document.getElementById('currentPassError');
                currentPassError.innerText = data.responseJSON.errors.currentpassword[0];

                const confirmPassError = document.getElementById('confirmPassError');
                confirmPassError.innerText = data.responseJSON.errors.confirmpassword[0];

                const passError = document.getElementById('passError');
                passError.innerText = data.responseJSON.errors.password[0];
            }
          }
      });
  });
});



</script>
@endsection
@endsection
