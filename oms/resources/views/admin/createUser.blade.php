
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
                           Create User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <form method="post" enctype="multipart/form-data" action="{{route('user.insert')}}">
                                {{csrf_field()}}
                                <table class="table table-striped table-bordered table-hover" border="0">
                                    <tr>
                                        <th colspan="4" scope="row"><div align="center"><h4>User Form</h4></div></th>
                                    </tr>
                                    <tr>
                                        <th width="13%" scope="row"><div align="right">Client Type <i style="color:red">*</i></div></th>
                                        <td width="37%">
                                            <select class="form-control" name="usertype" required readonly>
                                                <option value="User" selected>User</option>
                                            </select>
                                        </td>
                                        <th width="13%"><div align="right">Login Name <i style="color:red">*</i></div></th>
                                        <td width="37%">
                                            <input class="form-control" type="text" name="loginname" id="logname" required />
                                            <i id="uname" style="color:red;display:none">Username Exist</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><div align="right">Password <i style="color:red">*</i></div></th>
                                        <td>
                                            <input class="form-control" type="password" name="pass" id="pass1" required/>
                                        </td>
                                        <th><div align="right">Re-type <i style="color:red">*</i></div></th>
                                        <td>
                                            <input class="form-control" type="password" name="re-pass" id="pass2" required/>
                                            <i id="pname" style="color:red;display:none">Password Should be same and not Blank </i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><div align="right">Company Name <i style="color:red">*</i></div></th>
                                        <td>
                                            <input class="form-control" type="text" name="clientname" id="textfield5" required />
                                        </td>
                                        <th><div align="right">Contact Person <i style="color:red">*</i></div></th>
                                        <td>
                                            <input class="form-control" type="text" name="contact" id="textfield6" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><div align="right">Contact Number <i style="color:red">*</i></div></th>
                                        <td>
                                            <input class="form-control" type="text" name="number" id="textfield7" required/>
                                        </td>
                                        <th><div align="right">Email <i style="color:red">*</i></div></th>
                                        <td>
                                            <input class="form-control" type="email" name="email" id="textfield8" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><div align="right">Address </div></th>
                                        <td colspan="3">
                                            <input class="form-control" type="text" name="address" id="textfield9" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><div align="right">Web Address</div></th>
                                        <td colspan="3">
                                            <input class="form-control" type="text" name="web" id="textfield10" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <th colspan="4" scope="row">
                                            <div align="center">
                                                <input type="reset" value="CLEAR">
                                                <input type="submit" name="save" value="SAVE">
                                            </div>
                                        </th>
                                    </tr>
                                </table>
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

