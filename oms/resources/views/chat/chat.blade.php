@extends('main')
@section('head')
    <style>
        .portlet {
            margin-bottom: 15px;
        }

        .btn-white {
            border-color: #cccccc;
            color: #333333;
            background-color: #ffffff;
        }

        .portlet {
            border: 1px solid;
        }

        .portlet .portlet-heading {
            padding: 0 15px;
        }

        .portlet .portlet-heading h4 {
            padding: 1px 0;
            font-size: 16px;
        }

        .portlet .portlet-heading a {
            color: #fff;
        }

        .portlet .portlet-heading a:hover,
        .portlet .portlet-heading a:active,
        .portlet .portlet-heading a:focus {
            outline: none;
        }

        .portlet .portlet-widgets .dropdown-menu a {
            color: #333;
        }

        .portlet .portlet-widgets ul.dropdown-menu {
            min-width: 0;
        }

        .portlet .portlet-heading .portlet-title {
            float: left;
        }

        .portlet .portlet-heading .portlet-title h4 {
            margin: 10px 0;
        }

        .portlet .portlet-heading .portlet-widgets {
            float: right;
            margin: 8px 0;
        }

        .portlet .portlet-heading .portlet-widgets .tabbed-portlets {
            display: inline;
        }

        .portlet .portlet-heading .portlet-widgets .divider {
            margin: 0 5px;
        }

        .portlet .portlet-body {
            padding: 15px;
            background: #fff;
        }

        .portlet .portlet-footer {
            padding: 10px 15px;
            background: #e0e7e8;
        }

        .portlet .portlet-footer ul {
            margin: 0;
        }

        .portlet-green,
        .portlet-green>.portlet-heading {
            border-color: #16a085;
        }

        .portlet-green>.portlet-heading {
            color: #fff;
            background-color: #16a085;
        }

        .portlet-orange,
        .portlet-orange>.portlet-heading {
            border-color: #f39c12;
        }

        .portlet-orange>.portlet-heading {
            color: #fff;
            background-color: #f39c12;
        }

        .portlet-blue,
        .portlet-blue>.portlet-heading {
            border-color: #2980b9;
        }

        .portlet-blue>.portlet-heading {
            color: #fff;
            background-color: #2980b9;
        }

        .portlet-red,
        .portlet-red>.portlet-heading {
            border-color: #e74c3c;
        }

        .portlet-red>.portlet-heading {
            color: #fff;
            background-color: #e74c3c;
        }

        .portlet-purple,
        .portlet-purple>.portlet-heading {
            border-color: #8e44ad;
        }

        .portlet-purple>.portlet-heading {
            color: #fff;
            background-color: #8e44ad;
        }

        .portlet-default,
        .portlet-dark-blue,
        .portlet-default>.portlet-heading,
        .portlet-dark-blue>.portlet-heading {
            border-color: #34495e;
        }

        .portlet-default>.portlet-heading,
        .portlet-dark-blue>.portlet-heading {
            color: #fff;
            background-color: #34495e;
        }

        .portlet-basic,
        .portlet-basic>.portlet-heading {
            border-color: #333;
        }

        .portlet-basic>.portlet-heading {
            border-bottom: 1px solid #333;
            color: #333;
            background-color: #fff;
        }

        @media(min-width:768px) {
            .portlet {
                margin-bottom: 30px;
            }
        }

        .text-green {
            color: #16a085;
        }

        .text-orange {
            color: #f39c12;
        }

        .text-red {
            color: #e74c3c;
        }



    </style>
@endsection
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class=" bootstrap snippet">

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="portlet portlet-default">
                            <div class="portlet-heading">
                                <div class="portlet-title">
                                    <h4>Teknovisual</h4>
                                </div>
                                <div class="portlet-widgets">

                                    <span class="divider"></span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="chat" class="panel-collapse collapse in">
                                <div class="portlet-body chat-widget" style="overflow-y: auto; overflow-x:visible; width: auto; height: 500px;">
                                    <div id="chatbox">
                                        @foreach($chat as $msg)
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><b>
                                                                    @if($msg->userFrom==Auth::user()->user_id)
                                                                    Me
                                                                    @else
                                                                       {{$msg->username}}
                                                                    @endif
                                                                </b>
                                                                <span class="small pull-right">{{$msg->created_at}}</span>
                                                                </h4>
                                                            <p>{{$msg->msg}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                                <div class="portlet-footer">
                                    <form>
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" placeholder="Enter message..." rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-default pull-right" onclick="sendMessage()">Send</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-4 -->
                </div>
            </div>

        </section>
    </section>


@endsection
@section('socket')
    <script>
        socket.on('message', function (data) {

            console.log(data);
            $("#chatbox").append('<div class="row">'+
                '<div class="col-md-12">'+
                '<div class="media">'+
                '<a class="pull-left" href="#">'+
                '</a>'+
                '<div class="media-body">'+
                '<h4 class="media-heading">'+'User'+
                '<span class="small pull-right">'+'Today'+'</span>'+
                '</h4>'+
                '<p>'+data+'</p>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>');

        });
        function sendMessage() {
            var msg = $('#message').val().trim();

            $.ajax({
                type: 'POST',
                url: "{!! route('chat.sentMsg') !!}",
                cache: false,
                data: {_token:"{{csrf_token()}}",
                    msg:msg
                },
                success: function (data) {
                    console.log(data);

                }
            });


//            if (msg != '') {
//
//                $("#chatbox").append('<div class="row">'+
//                    '<div class="col-md-12">'+
//                    '<div class="media">'+
//                    '<a class="pull-left" href="#">'+
//                    '</a>'+
//                    '<div class="media-body">'+
//                    '<h4 class="media-heading">'+'Me'+
//                    '<span class="small pull-right">'+'Today'+'</span>'+
//                    '</h4>'+
//                    '<p>'+msg+'</p>'+
//                    '</div>'+
//                    '</div>'+
//                    '</div>'+
//                    '</div>');
//
//                socket.emit('message', msg);
//                $('#message').val('');
//
//            }
//            else {
//                alert('Fields Must not Empty');
//            }



        }






    </script>



@endsection



