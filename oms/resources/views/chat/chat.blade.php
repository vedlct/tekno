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
                                <div id="chatScroll" class="portlet-body chat-widget" style="overflow-y: auto; overflow-x:visible; width: auto; height: 500px;">
                                    <div id="chatbox">
                                        @for($i=count($chat)-1;$i>=0;$i--)
                                        {{--@foreach($chat as $msg)--}}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="media">
                                                        <a class="pull-left" href="#">
                                                            </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><b>
                                                                    @if($chat[$i]->userFrom==Auth::user()->user_id)
                                                                    Me
                                                                    @else
                                                                       {{$chat[$i]->username}}
                                                                    @endif
                                                                </b>
                                                                <span class="small pull-right">{{$chat[$i]->created_at}}</span>
                                                                </h4>
                                                            <p>{{$chat[$i]->msg}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        {{--@endforeach--}}
                                        @endfor
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
        var counter=1;
        $(document).ready(function() {
            $("#chatScroll").scrollTop($("#chatScroll")[0].scrollHeight);
            $.ajax({
                type: 'POST',
                url: "{!! route('chat.seenMsg') !!}",
                cache: false,
                data: {_token:"{{csrf_token()}}"
                },
                success: function (data) {
                    console.log(data);

                }
            });


        });
        socket.on('message', function (data) {

//            console.log(data);
            if(data.to='{{Auth::user()->user_id}}'){
                appendMsg(data);
            }

        });

        function appendMsg(data) {
            $("#chatbox").append('<div class="row">'+
                '<div class="col-md-12">'+
                '<div class="media">'+
                '<a class="pull-left" href="#">'+
                '</a>'+
                '<div class="media-body">'+
                '<h4 class="media-heading"><b>'+data.name+'</b>'+
                '<span class="small pull-right">'+data.time+'</span>'+
                '</h4>'+
                '<p>'+data.msg+'</p>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>');
            $("#chatScroll").scrollTop($("#chatScroll")[0].scrollHeight);

        }
        function sendMessage() {
            var msg = $('#message').val().trim();




            if (msg != '') {
                $.ajax({
                    type: 'POST',
                    url: "{!! route('chat.sentMsg') !!}",
                    cache: false,
                    data: {_token:"{{csrf_token()}}",
                        msg:msg
                    },
                    success: function (data) {
//                        console.log(data);
                        $("#chatbox").append('<div class="row">'+
                            '<div class="col-md-12">'+
                            '<div class="media">'+
                            '<a class="pull-left" href="#">'+
                            '</a>'+
                            '<div class="media-body">'+
                            '<h4 class="media-heading">'+'Me'+
                            '<span class="small pull-right">'+data.created_at+'</span>'+
                            '</h4>'+
                            '<p>'+msg+'</p>'+
                            '</div>'+
                            '</div>'+
                            '</div>'+
                            '</div>');

                        $("#chatScroll").scrollTop($("#chatScroll")[0].scrollHeight);

                        var message={
                            from:'{{Auth()->user()->user_id}}',
                            name:'{{Auth()->user()->username}}',
                            to :'admin',
                            time:data.created_at,
                            msg :msg
                        };
//                console.log(message);

                        socket.emit('message', message);
                        $('#message').val('');

                    }
                });



            }
            else {
                alert('Fields Must not Empty');
            }



        }


        $("#chatScroll").scroll(function() {
            var $height = $("#chatScroll").scrollTop();

            if($height == 0) {


//              var id=$("#userName").attr('data-panel-id');

                // console.log(id);


                $.ajax({
                    type: 'POST',
                    url: "{!! route('chat.getPreviousMsgForUser') !!}",
                    cache: false,
                    data: {_token:"{{csrf_token()}}",counter:counter},
                    success: function (data) {
                        console.log(data);

//                      $("#userName").html(userName);
//                      if(data.length==0){
//                          $("#chatbox").html('');
//                      }
//                      else {
//                          $("#chatbox").html('');
                        if (data.length != 0) {
                            for (i = 0; i < data.length; i++) {
                                $("#chatbox").prepend('<div class="row">' +
                                    '<div class="col-md-12">' +
                                    '<div class="media">' +
                                    '<a class="pull-left" href="#">' +
                                    '</a>' +
                                    '<div class="media-body">' +
                                    '<h4 class="media-heading">' + data[i].username +
                                    '<span class="small pull-right">' + data[i].created_at + '</span>' +
                                    '</h4>' +
                                    '<p>' + data[i].msg + '</p>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>');

                            }
                            $("#chatScroll").scrollTop(($("#chatScroll")[0].scrollHeight / 2));
                        }
                    }

//                  }
                });
                counter++;

                // console.log('50');
            } else {
                //  alert('drop');

            }
        });






    </script>



@endsection



