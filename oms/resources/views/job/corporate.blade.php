
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

    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                           Corporate-cli
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <!--    Corporate-->
                            <div id="Corporateform">
                                <form method="post" action="{{route('job.edit')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$jobCat->jobId}}">
                                <input type="hidden" name="corporateId" value="{{$jobCat['corporate-ciId']}}">

                                    <legend>Corporate-CI</legend>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" name="companyName" value="{{$job->companyName}}"></br>
                                        </div>
                                    </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Business Area:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Business Area" name="businessArea"  value="{{$job->businessArea}}"></br>

                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Theme Color:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Company Theme Color" name="themeColor" value="{{$jobCat->themeColor}}"></br>

                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Tagline/Slogan (if any):</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Tag Line" name="tagline" value="{{$jobCat->tagline}}"></br>
                                        </div>
                                    </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Official Email Address:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{$job->email}}"></br>

                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Phone number:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber" value="{{$job->phoneNumber}}"></br>

                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Address: :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Address" name="address" value="{{$job->address}}"></br>

                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Name and Designation for visiting cards:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Tag Line" name="nameAndDesignation" value="{{$jobCat->nameAndDesignation}}"></br>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-3" >QR CODE: </label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="qrCode" placeholder="Enter Tag Line"
                                                   @if($jobCat->qrCode==1)
                                                   value="Yes"
                                                    @else
                                                   value="No"
                                                    @endif
                                            ></br>

                                        </div>
                                    </div>


                                    <form class="form-group" >
                                        <label class="control-label col-sm-3" >CI Types: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter CI Type" name="ciType" value="{{$jobCat->ciType}}"></br>

                                        </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Estimated time:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Estimated Time" name="EstimatedTime" value="{{$job->EstimatedTime}}"></br>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="name">sales representative:  </label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text"  value="{{$job->user['username']}}"></br>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="name">Attach Logo & Images: </label><br>
                                            <div class="row">
                                                @foreach($images as $img)
                                                    <div style="height: 100px; width: 100px;" class="col-md-4">

                                                        <img src="{{url('../'.$img->path)}}" class="img-thumbnail">


                                                    </div>
                                                @endforeach


                                            </div>

                                        </div>


                                        @if(Auth::user()->user_type ==USERTYPE[0])
                                            <button class="btn btn-info pull-right">Edit</button>
                                        @endif


                                    </form>




                                    </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>














    <footer class="site-footer">
        @include('layout.footer')
    </footer>
    <!--footer end-->
</section>

@include('js.js')
@if(Auth::user()->user_type !=USERTYPE[0])
    <script>
        $('input').attr('readonly', 'readonly');
        $('textarea').attr('readonly', 'readonly');
    </script>
@endif
