@extends('main')

    @section('content')
        <section id="main-content">
            <section class="wrapper" style="background-color: white">
                <!--state overview start-->
                <div class="container-fluid">

                    <div class="col-md-4 form-group">
                      <label>Users</label>
                        <select class="form-control" id="user">
                            <option value="">select one</option>
                            @foreach($users as $user)
                                <option value="{{$user->user_id}}">{{$user->username}}</option>
                            @endforeach
                        </select>
                    </div>


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
                                <th width="15%" >Company Name</th>
                                <th width="10%">Category</th>
                                <th width="15%">Email</th>
                                <th width="20%">Comments</th>
                                <th width="5%">Status</th>
                                <th width="5%">Mined by</th>
                                <th width="10%">Created At</th>
                                <th width="10%">Action</th>
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
                    {data: 'username', name: 'username'},
                    { data: 'created_at', name: 'created_at' },

                    { "data": function (data) {
                            var url = '{{url("job/", ":id") }}';
                            return '<a class="btn btn-info btn-sm" data-panel-id="' + data.jobId + '"onclick="editProduct(this)"><i class="fa fa-edit"></i></a>';
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







    </script>




    @endsection