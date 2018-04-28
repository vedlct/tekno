@extends('main')
    @section('content')
    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                            All Jobs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered table-hover">
                                    <thead>

                                    <tr>
                                        <th width="5%" scope="col">Sl.</th>
                                        <th width="10%" scope="col">Client Name</th>
                                        <th width="15%" scope="col">Job Type</th>
                                        <th width="50%" scope="col">Brief</th>
                                        <th width="5%" scope="col">Status</th>
                                        <th width="5%" scope="col">Sales</th>
                                        <th width="5%" scope="col">Comments</th>
                                        <th width="5%" scope="col">details</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php


                                    $sl = 1;

                                    ?>
                                    @foreach($ongoingwork as $value)
                                    <tr id="myTableRow{{$value->jobId}}">
                                        <td>{{$sl}}</td>
                                        <td>
                                            {{$value->companyName}}
                                        </td>
                                        <td>{{$value->category}}</td>
                                        <td>
                                            @foreach($messages as $text)
                                                @if($text->id == $value->jobId)
                                                {{$text->msg}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <select name="paymenttype"  data-panel-id="{{$value->jobId}}" id="{{$value->jobId}}" onChange="changestatus(this)">


                                                    <option selected value='on going'>On Going</option>
												  <option value='done'>Done</option>


                                            </select>
                                        </td>

                                        <td>
                                            @if($value->potential)

                                                <input type="checkbox" class="star" style="margin-top: -14px "  data-panel-id="{{$value->jobId}}" onclick="potential(this)"  checked>
                                            @else
                                                <input type="checkbox" class="star" style="margin-top: -14px"  data-panel-id="{{$value->jobId}}" onclick="potential(this)" >

                                            @endif


                                        </td>
                                        <td>
                                            <a href="#" data-panel-id="{{$value->jobId}}" onclick="comment(this)"><div align="center"><i class="fa fa-comments" aria-hidden="true"></i>
                                                    @foreach($unseen as $u)
                                                        @if($u->jobId == $value->jobId)
                                                           <b style="color: red">({{$u->total}})</b>
                                                        @endif
                                                    @endforeach
                                                </div></a>

                                        </td>

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

            <!--modal-->
            <div id="myModal1" class="modal">
                <br/><br/><br/>

                <!-- Modal content -->

                <div class="modal-content" style="padding: 35px; width: 50%; margin: 0 auto; border: solid 2px black;">
                    <span class="close">×</span>

                    <h2>Add a Comment</h2>
                    <div id="txtHint"></div>


                </div>
            </div>
            <!-- endmodal-->

            <!--state overview end-->
        </section>
    </section>
@endsection
@section('foot-js')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
    function changestatus(x) {
        var id = $(x).data('panel-id');

        var status = $(x).val();



        $.ajax({
            type: 'post',
            url: "{{route('job.changestatus')}}",
            data: {"_token": "{{ csrf_token() }}", 'id': id, 'status': status},
            cache: false,
            success: function (data) {
                $.alert({
                    title: 'Success!',
                    content: 'Status Changed!',
                });
                $('#myTableRow'+id).remove();

            }

        });
    }

    function potential(x) {
        jobId = $(x).data('panel-id');


        $.ajax({
            type:'post',
            url:"{{route('job.changepotential')}}",
            data:{ "_token": "{{ csrf_token() }}",'jobId':jobId},
            cache: false,
            success:function(data)
            {
                console.log(data)
//                    $.alert({
//                        title: 'Success!',
//                        content: 'Status Changed!',
//                    });

            }

        });
    }


</script>
<script>

    var modal1 = document.getElementById('myModal1');
    var span = document.getElementsByClassName("close")[0];
    function comment(x) {



        btn = $(x).data('panel-id');


        $.ajax({
            type:'POST',
            url:'{{route('jobcomment')}}',
            data:{"_token": "{{ csrf_token() }}",id:btn},
            cache: false,
            success:function(data)
            {
                $('#txtHint').html(data);
                getNotification();
                // alert(data);
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
    @endsection



