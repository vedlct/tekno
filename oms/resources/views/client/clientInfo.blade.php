@extends('main')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
            <div class="jumbotron">
                <div class="row">
                    <form method="post" action="{{route('ClientInfoClient')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" name="email" type="text" value="{{$user->email}}" required></br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Company Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="company_name" value="{{$user->company_name}}" required></br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Contact No</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="contact_no" value="{{$user->contact_no}}"></br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Status</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" value="{{$user->client_status}}"></br>
                            </div>
                        </div>
                    <button class="btn btn-success" type="submit">Update</button>

                    </form>


                </div>
            </div>


        </section>
    </section>









@endsection