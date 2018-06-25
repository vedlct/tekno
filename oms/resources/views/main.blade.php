<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="{{url('img/TCL_logo.png')}}">

    <title>OMS - Order Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link href="{{url('css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{url('js/html5shiv.js')}}"></script>
    <script src="{{url('js/respond.min.js')}}"></script>

    <![endif]-->
    <style>
        td{
            text-align:center;
        }

        .star {
            visibility:hidden;
            font-size:30px;
            cursor:pointer;
        }
        .star:before {
            content: "\2606";
            position: absolute;
            visibility:visible;
            margin-top: -10px;
        }
        .star:checked:before {
            content: "\2605";
            position: absolute;
            margin-top: -10px;

        }

    </style>
    @yield('head')


</head>

<body>

<section id="container" >
    <!--header start-->

@include('Navigation.topmenu')
    {{--@if(Session::has('message'))--}}

{{--@endif--}}
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



    @yield('content')


<!--footer start-->




    <footer class="site-footer" >

        @include('layout.footer')
    </footer>
    <!--footer end-->
</section>





</body>
</html>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/jquery-1.8.3.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{url('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{url('js/jquery.scrollTo.min.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>

<!--common script for all pages-->
<script src="{{url('js/common-scripts.js')}}"></script>

<!--script for this page-->
@yield('foot-js')

<script>
    var socket = io('http://192.168.3.95:3000'); //Socket Server Address
    socket.on('news', function (data) {
        console.log(data);
        socket.emit('my other event', { my: 'data' });
    });
    socket.on('connect', function () {
        console.log("Connected");
        console.log(socket.id);
    });

    socket.on('notification', function (data) {
        console.log("received notification");
        console.log(data);

    });
    @if(Request::url() != route('chat.index'))
    socket.on('message', function (data) {

        console.log(data);
        if(data.to=={{Auth::user()->user_id}}){

           $('#msgNofication').css("background-color","red");
        }

        else if(data.to=='admin'){
            $('#msgNofication').css("background-color","red");
        }


    });
    @endif

</script>
@yield('socket')
<script>

    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: "{!! route('chat.getUnseenMsg') !!}",
            cache: false,
            data: {_token:"{{csrf_token()}}"},
            success: function (data) {
//                  console.log(data);
                  if(data.length>0){
                      $('#msgNofication').css("background-color","red");
                  }

            }
        });

        @if(Auth::user()['user_type']!=USERTYPE[2])
       getNotification();
        setInterval(function(){
            getNotification();
        }, 5000);

        @endif


    });

    function getNotification(){
//        val={message:"I am From Tekno"};
//       socket.emit('notification', "i am here to notify");

        $.ajax({
            type: 'POST',
            url: "{!! route('getNotification') !!}",
            cache: false,
            data: {
                "_token": "{{ csrf_token() }}"

            },
            success: function (data) {
                    console.log(data);
                    $('#notification').text(data);
            }

        });
    }

    $(function() {

        var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);

        $(".nav li").each(function(){
            if(pgurl==''){
                $(".nav li:eq(1)").addClass("active");
            }else
            if($('a',this).attr("href") == pgurl || $('a', this).attr("href") == '')
                $(this).addClass("active");
        })
    });
</script>

