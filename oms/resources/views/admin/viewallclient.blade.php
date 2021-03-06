
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    @include('css.css')

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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                            Client Information
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="4%" scope="col">Sl.</th>
                                        <th width="19%" scope="col">Client</th>
                                        <th width="14%" scope="col">Email</th>
                                        <th width="11%" scope="col">Number</th>
                                        <th width="11%" scope="col">Job Type</th>
                                        <th width="6%" scope="col">view</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php


                                    $totalAmount = 0;
                                    $sl = 1;

                                    ?>
                                    @foreach($client_view as $value)
                                    <tr>
                                        <td>{{$sl}}</td>
                                        <td>{{$value->companyName}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->phoneNumber}}</td>
                                        <td>{{$value->category}}</td>
                                        <td> <a href="{{route('job.get',['id'=>$value->jobId])}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>

                                    </tr>
                                    <?php
                                    $sl++;

                                    ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--state overview end-->
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

        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        @include('layout.footer')

    </footer>
    <!--footer end-->
</section>

@include('js.js')

<script>
    var modal1 = document.getElementById('myModal1');
    var span = document.getElementsByClassName("close")[0];

    function edit(x) {

        btn = $(x).data('panel-id');



        $.ajax({
            type:'get',
            url:'{{url('/ClientInfo')}}/'+btn,
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
            }

        });

        modal1.style.display = "block";

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

<script>


    function changestatus(x)
    {
        var option = document.getElementById(x).value;

        $.ajax({
            type:'get',
            url:'{{url('/changeuserstatus')}}/'+option,
            data:{'id':x,'value':option},
            cache: false,
            success:function(data)
            {
                //$('#txtHint').html(data);
                alert(data);
                //location.reload();
            }

        });
    }


</script>

</body>
</html>

