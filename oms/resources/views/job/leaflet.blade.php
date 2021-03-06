
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
                                <form method="post" action="{{route('job.edit')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$jobCat->jobId}}">
                                    <input type="hidden" name="leafletId" value="{{$jobCat->leafletId}}">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" name="companyName" value="{{$job->companyName}}"></br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Leaflet Size:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="leafletSize" value="{{$jobCat->leafletSize}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Business Area:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="businessArea" value="{{$job->businessArea}}"><br>
                                        </div>
                                    </div>

                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Website:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="companyWebsiteUrl" value="{{$job->companyWebsiteUrl}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Email Address:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" name="email" value="{{$job->email}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Phone Number:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="phoneNumber" value="{{$job->phoneNumber}}"><br>
                                        </div>
                                    </div>




                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company Address:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea" name="address" rows="3" placeholder="Please give Company Address" required>{{$job->address}}</textarea><br>
                                        </div>
                                    </div>




                                    <div class="form-group" style="margin-top: 30px; ">
                                        <label class="control-label col-sm-3" >Main Focus: </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="mainFocus" value="{{$jobCat->mainFocus}}"><br>
                                        </div>
                                    </div>



                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Tagline / Slogan (if any):</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="tagline"  value="{{$jobCat->tagline}}"><br>
                                        </div>
                                    </div>


                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Text (soft file, which will be live on leaflet): </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="tText" value="{{$jobCat->	tText}}"><br>
                                        </div>
                                    </div>




                                    <div class="form-group" >
                                        <label class="control-label col-sm-3" >Company social media urls. (if any):</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" name="mediaUrl" placeholder="Please give Company Address">{{$jobCat->mediaUrl}}</textarea><br>
                                        </div>
                                    </div>


                                <div class="form-group">
                                        <label for="example-tel-input" class="col-sm-3 control-label">References (if any):</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="number" name="reference" required>{{$jobCat->reference}}</textarea><br>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-sm-3 control-label">Estimated Time:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" type="text"  name="EstimatedTime" required>{{$job->EstimatedTime}}</textarea><br>
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
                                    <button class="btn btn-info pull-right">Update</button>
                                @endif

                                </form>


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
