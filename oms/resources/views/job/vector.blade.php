
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
                            <h2>Vector</h2>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <div id="Vectorform" >

                                    <legend><h2>Vector</h2></legend>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Company Name:*</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text" placeholder="Company name" value="{{$jobCat->companyName}}"></br>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-3" >Attach High Res Image: *</label>
                                        <div class="col-sm-9">

                                            <input type="file" id="ResImage" name="ResImage[]" class=""  multiple/><br>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Comments (optional): </label>
                                        <div class="col-sm-9">

                                            <textarea id="Comments" name="Comments" rows="6" class="form-control">{{$jobCat->comments}}</textarea>

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

