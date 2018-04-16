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
                                        <th width="20%" scope="col">Service Type</th>
                                        <th width="50%" scope="col">Brief</th>
                                        <th width="15%" scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php



                                    $sl = 1;

                                    ?>
                                    @foreach($finshedwork as $value)
                                    <tr>
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
                                            Done
                                        </td>
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

</script>
@endsection




