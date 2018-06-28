
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    @include('css.css')
    <style>
        input:read-only {
            background-color: yellow;

        }
    </style>
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
                                <form method="post" action="{{route('job.edit')}}">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$jobCat->jobId}}">
                                <input type="hidden" name="brochureId" value="{{$jobCat->brochureId}}">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name"> Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="companyName" placeholder="Company name"  value="{{$jobCat->companyName}}" required></br>
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name"> Company Email:*</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="email" name="email" id="email" value="{{$jobCat->email}}" ></br>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Phone Number:*</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="number" name="phoneNumber" value="{{$jobCat->phoneNumber}}"  ></br>
                                    </div>
                                </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Brochure Size:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->size}}" name="size" required="required"></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name" >Brochure Pages: </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" value="{{$jobCat->page}}"  name="page" required="required"></br>
                                        </div>&nbsp;
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Business Area:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="businessArea" value="{{$jobCat->businessArea}}" required="required" ></br>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Theme Color:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="themeColor"  value="{{$jobCat->themeColor}}" required="required" ></br>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Tagline / Slogan (if any): </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="tagline" value="{{$jobCat->tagline}}"  required="required"  ></br>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Brochure Type (description): </label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" rows="6" name="comments" required >{{$job->comments}}</textarea></br>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name"  >Main Focus: </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="mainFocus" value="{{$jobCat->mainFocus}}"  required="required"  ></br>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">TText(soft file, which will be live on leaflet):</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="tText" type="text" value="{{$jobCat->tText}}"></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company social media urls. (if any):</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="socialMediaUrl" rows="6" >{{$jobCat->socialMediaUrl}}</textarea></br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">References (if any): </label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="reference" type="text" value="{{$jobCat->reference}}"></br>
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Estimated Time:  </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" name="EstimatedTime" value="{{$job->EstimatedTime}}"></br>
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

                                    @if(Auth::user()->user_type ==USERTYPE[0])
                                    <button class="btn btn-info pull-right">Update</button>
                                    @endif
                                </form>

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
@if(Auth::user()->user_type !=USERTYPE[0])
<script>
    $('input').attr('readonly', 'readonly');
    $('textarea').attr('readonly', 'readonly');
</script>
    @endif