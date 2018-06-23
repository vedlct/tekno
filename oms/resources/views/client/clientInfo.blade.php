@extends('main')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="jumbotron">
                <div class="row">

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" value="{{$user->email}}"></br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Company Name</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" value="{{$user->company_name}}"></br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Contact No</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" value="{{$user->contact_no}}"></br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Status</label>
                        <div class="col-md-9">
                            <input class="form-control" type="text" value="{{$user->client_status}}"></br>
                        </div>
                    </div>


                </div>
            </div>


        </section>
    </section>









@endsection