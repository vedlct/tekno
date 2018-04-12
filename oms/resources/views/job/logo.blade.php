
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
                            <h2>Logo</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <!--    Logoform-->

                            <div id="Logoform" >


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$job->companyName}}"></br>

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


                                <div class="form-group" >
                                        <label class="col-md-3 control-label" >Logo Shape:</label>

                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$jobCat->logoShape}}"></br>

                                        </div>
                                    </div>
                                    <br>


                                    <div class="form-group" style="margin-bottom: 40px">
                                        <label class="control-label col-sm-3" >Prefered Color:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter color name" value="{{$jobCat->preferedColor}}"><br>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group"  style="margin-bottom: 80px">
                                        <label class="control-label col-sm-3" >Business Type:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Enter Business Tpe" value="{{$jobCat->businessType}}"><br>
                                        </div>
                                    </div>


                                    <div class="form-group"  style="margin-bottom: 40px">
                                        <label class="control-label col-sm-3" >Other comments:</label>
                                        <div class="col-sm-9">

                                            <textarea id="OtherComments" name="OtherComments" rows="6" required class="form-control">{{$job->comments}}</textarea><br>

                                        </div>
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
<script>
    $('input').attr('readonly', 'readonly');
    $('textarea').attr('readonly', 'readonly');
</script>

