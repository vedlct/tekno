
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
                          <h2>Leaflet</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <!--  Leaflet Form -->
                            <div id="Leafletform">


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$jobCat->companyName}}"></br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Leaflet Size:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$jobCat->leafletSize}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Business Area:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"value="{{$jobCat->businessArea}}"><br>
                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Website:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$jobCat->companyWebsiteUrl}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Email Address:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" value="{{$jobCat->email}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Phone Number:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$jobCat->phoneNumber}}"><br>
                                        </div>
                                    </div>




                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Address:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea" name="CompanyAddress" rows="3" placeholder="Please give Company Address" required>{{$jobCat->address}}</textarea><br>
                                        </div>
                                    </div>




                                    <div class="form-group" style="margin-top: 30px; ">
                                        <label class="control-label col-sm-3" >Main Focus: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$jobCat->mainFocus}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Tagline / Slogan (if any):</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  value="{{$jobCat->tagline}}"><br>
                                        </div>
                                    </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Text (soft file, which will be live on leaflet): </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="{{$jobCat->leafletSize}}"><br>
                                        </div>
                                    </div>




                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company social media urls. (if any):</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" name="companyMediaUrlAddress" placeholder="Please give Company Address">{{$jobCat->leafletSize}}</textarea><br>
                                        </div>
                                    </div>


                                <div class="form-group">
                                        <label for="example-tel-input" class="col-sm-3 control-label">References (if any):</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="number" required>{{$jobCat->reference}}</textarea><br>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-sm-3 control-label">Estimated Time:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="text" id="TextSoftFile" name="estimatedTime" required>{{$jobCat->EstimatedTime}}</textarea><br>
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
        </section>
    </section>















    <footer class="site-footer">
        @include('layout.footer')
    </footer>
    <!--footer end-->
</section>

@include('js.js')

