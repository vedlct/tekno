<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="{{url('img/TCL_logo.png')}}">

    <title>User Login | Order Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{url('pages/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/style-res')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{url('js/html5shiv.js')}}"></script>
    <script src="{{url('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="{{ route('login') }}" method="post">
        <h2 class="form-signin-heading">sign in now</h2>
        <br>
        <center><img class="img-responsive img-thumbnail" src="{{url('img/TCL_logo.png')}}" width="150"></center>
        <div class="login-wrap">
            {{csrf_field()}}
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="User Name" autofocus>
            @if ($errors->has('username'))
                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
            @endif
            <input type="password" class="form-control" name="password" placeholder="Password">
            @if ($errors->has('password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif

            <button class="btn btn-lg btn-login btn-block" type="submit" name="login">Sign in</button>

        </div>
    </form>
    <div class="col-lg-4">
    </div>
    <div class="col-lg-4">
        <br><center>OR</center><br>
        <a href="{{url('/Registration')}}" target="_blank"><button class="btn btn-lg btn-login btn-block" style="background: #4bb158;;box-shadow: 0 4px #4bb158;color: white;">Create New Account</button></a>
        

    </div>
    
    
    <div align="center" class="col-lg-4">
   
    
    </div>
</div>
<div align="center"><a target="_blank" href ="http://instabite.com/webp/pdffile/OMS(Job).pdf"><h2>User guide</h2></a></div>



<!-- js placed at the end of the document so the pages load faster -->
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>



</body>
</html>
