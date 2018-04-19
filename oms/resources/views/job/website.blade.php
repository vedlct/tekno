
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
                                <form method="post" action="{{route('job.edit')}}">

                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$jobCat->jobId}}">
                                    <input type="hidden" name="websiteId" value="{{$jobCat->websiteId}}">


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" name="companyName" value="{{$jobCat->companyName}}" required></br>

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
                                        <label class="col-sm-3 control-label">Website Type:</label>
                                        <div >
                                            &nbsp;  <div class="col-md-9">
                                                <input class="form-control" type="text" name="websiteType" value="{{$jobCat->websiteType}}" required></br>
                                            </div> &nbsp;
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Business Detail:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="businessDetails"   required rows="6" placeholder="Please describe in short about your business" >{{$jobCat->businessDetails}}</textarea></br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name"> Number Of Page:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" name="numberOfPage" value="{{$jobCat->numberOfPage}}"> <br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"> Portfolio Page:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="portfolioPage"
                                                   @if($jobCat->portfolioPage==1)
                                                   value="Yes"
                                                   @else
                                                   value="No"
                                                       @endif


                                            > <br>
                                        </div>


                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Website Content Management:</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="contentManagementType" value="{{$jobCat->contentManagementType}}"> <br>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name"> Reference Website:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="reference" c rows="6" placeholder="Please provide one or more than one URLs of websites you prefer">{{$job->reference}}</textarea></br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Social Media URLs:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"  name="socialMediaUrl" cols="30" rows="6" placeholder="Please provide your company’s social media account URLs (if any)">{{$jobCat->socialMediaUrl}}</textarea></br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Existing Website (if any):</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="existingWebsite" value="{{$jobCat->existingWebsite}}"><br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="name">Other Comments (if any):</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="comments" cols="30" rows="6" placeholder="">{{$job->comments}}</textarea></br>
                                        </div>
                                    </div>


                                <div class="form-group" >
                                    <label class="control-label col-sm-3" >Estimated Time: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="EstimatedTime"  value="{{$job->EstimatedTime}}"><br>
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
@if(Auth::user()->user_type !=USERTYPE[0])
    <script>
        $('input').attr('readonly', 'readonly');
        $('textarea').attr('readonly', 'readonly');
    </script>
@endif
