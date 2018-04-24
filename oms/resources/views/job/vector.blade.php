
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
            <!--sidebar menu end-->
        </div>
    </aside>

    <section id="main-content">
        <section class="wrapper">
            <!--state overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div  class="panel-heading">
                            <h2>Vector</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <div id="Vectorform" >


                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$jobCat->jobId}}">
                                <form method="post" action="{{route('job.edit')}}">

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:*</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$jobCat->companyName}}"></br>

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
                                        <label class="control-label col-sm-3">Comments (optional): </label>
                                        <div class="col-sm-9">

                                            <textarea id="Comments" name="Comments" rows="6" class="form-control">{{$jobCat->comments}}</textarea><br>

                                        </div>
                                    </div>

                                <div class="form-group" >
                                    <label class="control-label col-sm-3" >Estimated Time: </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder=""  value="{{$jobCat->EstimatedTime}}"><br>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">sales representative:  </label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text"  value="{{$jobCat->user['username']}}"></br>
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