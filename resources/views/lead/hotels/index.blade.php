@extends('layouts.dashboardprime')

@section('content')

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Leads
                <small>Welcome to {{$compn}}</small>
                </h2>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-md-right">

                <a href="" class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3 delete-all" data-url="">
                    <i class="zmdi zmdi-minus mt-2"></i>
                </a>
                <a href="/leads/create" class="btn btn-white btn-icon btn-round hidden-sm-down float-right ml-3" role="button">
                    <i class="zmdi zmdi-plus mt-2"></i>
                </a>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="/dashboard"><i class="zmdi zmdi-home"></i> {{$compn}}</a></li>
                    <li class="breadcrumb-item active">Leads</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>{{$compn}}</strong> Leads </h2>
                    </div>
                    <div class="body">
                        <table class="table-responsive table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="check_all"></th>
                                    <th>Client Name</th>
                                    <th>User</th>
                                    <th>City/Hotel Name</th>
                                    <th>Number of Rooms</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Number of Adults</th>
                                    <th>Number of Kids</th>
                                    <th>Kids Age (1)</th>
                                    <th>Kids Age (2)</th>
                                    <th>Kids Age (3)</th>
                                    <th>Kids Age (4)</th>
                                    <th>Kids Age (5)</th>
                                    <th>Kids Age (6)</th>
                                    <th>Bed Configuration</th>
                                    <th>Rating</th>
                                    <th>Lead Status</th>
                                    <th>Remarks</th>

                                </tr>
                            </thead>
                            {{-- need to change tbody laravel code --}}
                            <tbody>
                                @foreach($users as $user)
                                <tr id="tr_{{$user->id}}">
                                    <td><input type="checkbox" class="checkbox" data-id="{{$user->id}}"></td>
                                    <td>{{$user->userid}}</td>
                                    <td><a href="{{route('users.edit', $user->id)}}"> {{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->companyinitials}}000{{$user->companyid}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{$user->deal}}</td>
                                    <td>{{$user->value}}</td>
                                </tr>
                                @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
    </div>
</section>
@section('scripts')
<script src="{{URL::asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#check_all').on('click', function(e) {
         if($(this).is(':checked',true))
         {
            $(".checkbox").prop('checked', true);
         } else {
            $(".checkbox").prop('checked',false);
         }
        });
         $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#check_all').prop('checked',true);
            }else{
                $('#check_all').prop('checked',false);
            }
         });
        $('.delete-all').on('click', function(e) {
            var idsArr = [];
            $(".checkbox:checked").each(function() {
                idsArr.push($(this).attr('data-id'));
            });
            if(idsArr.length <=0)
            {
                alert("Please select atleast one record to delete.");
            }  else {
                if(confirm("Are you sure, you want to delete the selected Agents?")){
                    var strIds = idsArr.join(",");
                    $.ajax({
                        url: "{{ route('product.multiple-delete') }}",
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+strIds,
                        success: function (data) {
                            if (data['status']==true) {
                                $(".checkbox:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
                }
            }
        });
        $('[data-toggle=confirmation]').confirmation({
            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {
                element.closest('form').submit();
            }
        });

    });
</script>

@endsection

@endsection
