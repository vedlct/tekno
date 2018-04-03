
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
                           <h2>Website</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">



                            <div id="websiteform">



                                    <legend class="text-center">Website</legend>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$jobCat->companyName}}" required></br>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Website Type:</label>
                                        <div >
                                            &nbsp;  <div class="col-md-9">
                                                <input class="form-control" type="text" value="{{$jobCat->websiteType}}" required></br>
                                            </div> &nbsp;
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Business Detail:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="BusinessDetail"   required rows="6" placeholder="Please describe in short about your business" >{{$jobCat->comments}}</textarea></br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name"> Number Of Page:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" value="{{$jobCat->numberOfPage}}"> <br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Portfolio Page:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{$jobCat->portfolioPage}}"> <br>
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Website Content Management:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{$jobCat->contentManagementType}}"> <br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name"> Reference Website:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="ReferenceWeb" c rows="6" placeholder="Please provide one or more than one URLs of websites you prefer">{{$jobCat->reference}}</textarea></br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Social Media URLs:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"  name="MediaURLs" cols="30" rows="6" placeholder="Please provide your company’s social media account URLs (if any)">{{$jobCat->socialMediaUrl}}</textarea></br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Existing Website (if any):</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" value="{{$jobCat->existingWebsite}}"><br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Other Comments (if any):</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="OtherComments" cols="30" rows="6" placeholder="Please mention some words regarding your primary requirements (it may change / increase / decrease in future if you want so)"></textarea></br>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Estimated Development Time:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"type="text" name="ExistingWeb" placeholder="Give Estimated Development Time"  required>{{$jobCat->EstimatedTime}}</textarea><br>

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

