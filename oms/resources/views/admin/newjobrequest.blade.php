@extends('main')
    @section('content')

    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                            Pending Jobs
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="example">
                                                <thead>
                                                <tr>
                                        <th width="2%" scope="col">Sl.</th>
                                        <th width="10%" scope="col">Company Name</th>
                                        <th width="5%" scope="col">category</th>
                                        <th width="10%" scope="col">email</th>
                                        <th width="30%" scope="col">comments</th>
                                        <th width="5%" scope="col">status</th>
                                        <th width="5%" scope="col">Created At</th>
                                                    <th width="5%"> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $s=1; ?>
                                    @foreach($newjobrequest as $value)

                                    <tr>
                                        <td>{{$s}}</td>
                                        <td>
                                            {{$value->companyName}}
                                        </td>

                                        <td>{{$value->category}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->comments}}</td>
                                        <td>
                                            {{--{{$value->status}}--}}
                                            <select  data-panel-id="{{$value->jobId}}" name="jobStatus" onChange="changestatus(this)">
                                                @foreach(JOBSTATUS as $status)
                                                    <option id="{{$value->jobId}}"  value="{{$status}}"
                                                    @if($value->status == $status)
                                                        selected
                                                    @endif
                                                    >{{$status}}</option>

                                                @endforeach


                                            </select>

                                        </td>
                                        <td>{{$value->created_at}}</td>
                                        <td>
                                            <div align="center">
                                                <a href="{{route('job.get',['id'=>$value->jobId])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                <a href="#" data-panel-id="{{$value->jobId}}"onclick="deletejobrequest(this)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </td>
                                    </tr>
                                        <?php $s++ ?>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--state overview end-->
        </section>
    </section>
    <!--main content end-->
    <!--footer start-->

@endsection
@section('foot-js')
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>

    $(document).ready(function() {
        $('#example').DataTable();
    } );



    function changestatus(x)
    {
        var id = $(x).data('panel-id');

        var status = $(x).val();

        $.ajax({
            type:'post',
            url:"{{route('job.changestatus')}}",
            data:{ "_token": "{{ csrf_token() }}",'id':id,'status':status},
            cache: false,
            success:function(data)
            {
                $.alert({
                    title: 'Success!',
                    content: 'Status Changed!',
                });

            }

        });
    }









function deletejobrequest(x)
    {
        btn = $(x).data('panel-id');

        if (confirm('Are you sure you want to delete this Job request ?')) {
            // Save it!

            $.ajax({
                type:'get',
                url:'{{url('/deletejobreq')}}/'+btn,
                data:{'id':btn},
                cache: false,
                success:function(data)
                {
                    //$('#txtHint').html(data);
                    window.location="{{url('/NewJobRequest')}}";
                }

            });

        } else {
            window.location="{{url('/NewJobRequest')}}";
        }




    }


</script>
@endsection
