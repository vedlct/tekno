@extends('main')

    @section('content')
        <section id="main-content">
            <section class="wrapper" style="background-color: white">
                <!--state overview start-->
                <div class="container-fluid">
                    @if(Auth::user()->user_type != USERTYPE[2])
                    <div class="col-md-4 form-group">
                      <label>Users</label>
                        <select class="form-control" id="user">
                            <option value="">select one</option>
                            @foreach($users as $user)
                                <option value="{{$user->user_id}}">{{$user->username}}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif


                    <div class="col-md-4 form-group">
                        <label>Status</label>
                        <select class="form-control" id="status">
                            <option value="">select one</option>
                            @foreach(JOBSTATUS as $status)
                                <option value="{{$status}}">{{$status}}</option>
                            @endforeach
                            <option value="done">done</option>
                        </select>
                    </div>


                    <div class="table table-responsive" style="margin-top: 20px">
                        <table id="allProductList" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th width="15%" style="text-align: center">Company Name</th>
                                <th width="10%" style="text-align: center">Category</th>
                                <th width="15%" style="text-align: center">Email</th>
                                <th width="20%" style="text-align: center">Comments</th>
                                <th width="5%" style="text-align: center">Status</th>
                                @if(Auth::user()->user_type != USERTYPE[2])
                                <th width="5%" style="text-align: center">Mined by</th>
                                @endif
                                <th width="10%" style="text-align: center">Created At</th>
                                <th width="5%" style="text-align: center">Sales</th>
                                <th width="10%" style="text-align: center">Action</th>
                            </tr>
                            </thead>

                        </table><br>


                    </div>



                </div>
            </section>
        </section>



    @endsection

@section('foot-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        var table;
        $(document).ready(function() {

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            table = $('#allProductList').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,


                "ajax": {
                    "url": "{!! route('job.data') !!}",
                    "type": "POST",
                    data: function (d) {
                        d._token = "{{csrf_token()}}";
                        d.user=$('#user').val();
                        d.status=$('#status').val();
//                        d.productName=$('#product').val();
                    },
                },
                columns: [

                    {data: 'companyName', name: 'companyName'},
                    {data: 'category', name: 'category'},
                    {data: 'email', name: 'email'},
                    {data: 'comments', name: 'comments'},
                    {data: 'status', name: 'status'},
                        @if(Auth::user()->user_type != USERTYPE[2])
                        {data: 'username', name: 'username'},
                        @endif
                    { data: 'created_at', name: 'created_at' },
                    { "data": function (data) {
                        {{--var url = '{{url("job/", ":id") }}';--}}
                        if(data.potential !=null){
                            return '<input type="checkbox" class="star" data-panel-id="' + data.jobId + '"onclick="potential(this)"  checked>';
                        }
                        else {
                            return '<input type="checkbox" class="star" data-panel-id="' + data.jobId + '"onclick="potential(this)" >';
                        }

                    },
                        "orderable": false, "searchable": false, "name": "selected_rows"
                    },

                    { "data": function (data) {
                            {{--var url = '{{url("job/", ":id") }}';--}}
                            if(data.potential !=null){
                                return '<a class="btn btn-info btn-sm" data-panel-id="' + data.jobId + '"onclick="editProduct(this)"><i class="fa fa-edit"></i></a>';

                            }
                            else {
                                return '<a class="btn btn-info btn-sm" data-panel-id="' + data.jobId + '"onclick="editProduct(this)"><i class="fa fa-edit"></i></a>';

                            }

                        },
                        "orderable": false, "searchable": false, "name": "selected_rows"
                    },
                ],
                order: [[0, 'desc']],
                "aaSorting": [],
                "order": [],

            });


            $('#user').change(function(){ //button filter event click
                table.search("").draw(); //just redraw myTableFilter
                table.ajax.reload();  //just reload table

            });
            $('#status').change(function(){ //button filter event click
                table.search("").draw(); //just redraw myTableFilter
                table.ajax.reload();  //just reload table

            });


        });

        function editProduct(x) {
            btn = $(x).data('panel-id');
            var url = '{{route("job.get", ":id") }}';
            //alert(url);
            var newUrl=url.replace(':id', btn);
            window.location.href = newUrl;
        }

        function potential(x) {
            @if(Auth::user()->user_type != USERTYPE[2])
                jobId = $(x).data('panel-id');
                $.ajax({
                    type:'post',
                    url:"{{route('job.changepotential')}}",
                    data:{ "_token": "{{ csrf_token() }}",'jobId':jobId},
                    cache: false,
                    success:function(data)
                    {
                        console.log(data)

                    }

                });
            @endif
        }







    </script>




    @endsection