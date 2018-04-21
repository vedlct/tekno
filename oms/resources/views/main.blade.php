<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="{{url('img/TCL_logo.png')}}">

    <title>OMS - Order Management System.</title>

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

<!--common script for all pages-->
<script src="{{url('js/common-scripts.js')}}"></script>

<!--script for this page-->
@yield('foot-js')

<script>
    $(document).ready(function() {
        getNotification();

        setInterval(function(){
            getNotification();
        }, 3000);


    });

    function getNotification(){
//        alert('done');
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
