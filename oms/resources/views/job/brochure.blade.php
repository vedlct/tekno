
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
        <div id="sidebar"  class="nav-collapse">
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
                            <h2>Brochure</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <!--    Brochure-->

                            <div id="Brochureform">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name"> Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name"  value="{{$jobCat->companyName}}" required></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Brochure Size:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->size}}" required="required"></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name" >Brochure Pages: </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->page}}" required="required"></br>
                                        </div>&nbsp;
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Business Area:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->businessArea}}" required="required" ></br>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Theme Color:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text"  value="{{$jobCat->themeColor}}" required="required" ></br>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Tagline / Slogan (if any): </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->tagline}}"  required="required"  ></br>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Brochure Type (description)): </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="6" required >{{$jobCat->comments}}</textarea></br>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name"  >Main Focus: </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->mainFocus}}"  required="required"  ></br>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">TText(soft file, which will be live on leaflet):</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->tText}}"></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company social media urls. (if any):</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="6" >{{$jobCat->socialMediaUrl}}</textarea></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">References (if any): </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->reference}}"></br>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Estimated Time:  </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->EstimatedTime}}"></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Attach Logo & Images: </label><br>
                                        <div class="row">
                                            @foreach($images as $img)
                                            <div class="col-md-3">
                                            <img src="{{$img->path}}" >
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

