
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

                                    <legend>Corporate-CI</legend>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$jobCat->companyName}}"></br>
                                        </div>
                                    </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Business Area:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Business Area"  value="{{$jobCat->businessArea}}"></br>

                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Theme Color:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Company Theme Color" value="{{$jobCat->themeColor}}"></br>

                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Tagline/Slogan (if any):</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Tag Line" value="{{$jobCat->tagline}}"></br>
                                        </div>
                                    </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Official Email Address:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Email" value="{{$jobCat->email}}"></br>

                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Phone number:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Phone Number" value="{{$jobCat->phoneNumber}}"></br>

                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Address: :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Address" value="{{$jobCat->address}}"></br>

                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Name and Designation for visiting cards:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Tag Line" value="{{$jobCat->nameAndDesignation}}"></br>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-3" >QR CODE: </label>

                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Tag Line"
                                                   @if($jobCat->qrCode==1)
                                                   value="Yes"
                                                    @else
                                                   value="No"
                                                    @endif
                                            ></br>

                                        </div>
                                    </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >CI Types: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter CI Type" value="{{$jobCat->ciType}}"></br>

                                        </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Estimated time:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Estimated Time" value="{{$jobCat->EstimatedTime}}"></br>
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

