
<!--For Admin-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    @include('css.css')


    <style>

        .passform
        {
            border: none;
            /* cursor: context-menu; */
            background-color: #f9f9f9;
            width: 100%;
        }

        .passform:hover
        {
            border: none;
            /* cursor: context-menu; */
            background-color:#f9f9f9;
        }


        .p{
            display: none;
        }
    </style>



</head>

<body>
<section id="container" >
    <!--header start-->
@include('Navigation.topmenu')
<!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                @include('Navigation.menu')
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                            User Info & Password Change
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th width="20%">Use Name</th>
                                        <th width="10%">Password</th>
                                        <th width="20%">User Type</th>
                                        <th width="20%">Status</th>
                                        <th width="20%">Details</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($getinfo as $value)

                                    <tr class="gradeA even">
                                        <td>{{$value->username}}</td>
                                        <td><input class="passform" aria-hidden="true" type="password" value="{{$value->password}}" readonly="readonly" /></td>
                                        <td>{{$value->user_type}}</td>
                                        <td>
                                            <select data-id="{{$value->user_id}}" class="status">
                                            @foreach(USERSTATUS as $status)
                                                <option @if($status == $value->client_status)
                                                        selected
                                                        @endif>{{$status}}</option>
                                                @endforeach
                                            </select>


                                        </td>
                                        <td><div align="center"><a id="editlead" href="#" data-panel-id="{{$value->user_id}}" onClick="passchange(this)"><i class="fa fa-edit fa-fw"></i></a></div></td>
                                    </tr>


                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--modal-->
            <div id="myModal1" class="modal">
                <br/><br/><br/>

                <!-- Modal content -->

                <div class="modal-content" style="padding: 35px; width: 50%; margin: 0 auto">
                    <span class="close">×</span>

                    <h2>Edit Content</h2>



                    <div id="txtHint"></div>



                </div>
            </div>
            <!-- endmodal-->

            <!--state overview end-->
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        @include('layout.footer')
    </footer>
    <!--footer end-->
</section>

</body>
</html>
@include('js.js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script type="text/javascript">


    $(".passform").mousedown(function(){
        $(this).prop('type', 'text');
    });

    $(".passform").mouseup(function(){
        $(this).prop('type', 'password');
    });


</script>

<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    $('.status').change(function() {
        var staus=$(this).val();
        var id = $(this).data('id');

        $.ajax({
            type:'post',
            url:'{{route('changeUserStatus')}}',
            data:{'id':id,'status':staus},
            cache: false,
            success:function(data)
            {
//               console.log(data);
                $.alert({
                    title: 'Success!',
                    content: data,
                });

            }

        });



    });









    var modal1 = document.getElementById('myModal1');
    var span = document.getElementsByClassName("close")[0];

    function passchange(x)
    {
        modal1.style.display = "block";

        btn = $(x).data('panel-id');

        $.ajax({
            type:'get',
            url:'{{url('/changepassword')}}/'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
                //alert(data);

            }

        });


    }

    span.onclick = function() {
        modal1.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }

</script>