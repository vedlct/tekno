
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
                           <h2>Banner</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <div id="Bannerform" >
                                <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$jobCat->companyName}}"></br>
                                        </div>
                                </div>


                                <div class="form-group" >
                                        <label class="control-label col-sm-3" >Banner Size:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Banner Size"  value="{{$jobCat->bannerSize}}"><br>

                                        </div>
                                </div>



                                <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Business Area:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Business Area"  value="{{$jobCat->businessArea}}"><br>
                                        </div>
                                </div>

                                <div class="form-group" >
                                        <label class="control-label col-sm-3" >Headline(if ready): </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter HeadLine"  value="{{$jobCat->headLine}}"><br>

                                        </div>
                                </div>





                                <div class="form-group" >
                                        <label class="control-label col-sm-3" >Banner Type: </label>

                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  value="{{$jobCat->bannerType}}"><br>
                                    </div>
                                </div>


                                <div class="form-group" >
                                        <label class="control-label col-sm-3" >Text (soft file, which will be live on leaflet):  </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter text file" value="{{$jobCat->tText}}"><br>
                                        </div>
                                </div>


                                <div class="form-group" >
                                        <label class="control-label col-sm-3" >References (if any): </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Reference"  value="{{$jobCat->reference}}"><br>

                                        </div>
                                </div>


                                <div class="form-group" >
                                        <label class="control-label col-sm-3" >Estimated Time: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Estimated Time"  value="{{$jobCat->EstimatedTime}}"><br>
                                        </div>
                                </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Comments (optional): </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Comments" value="{{$jobCat->comments}}"><br>

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
                                    &nbsp;



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

