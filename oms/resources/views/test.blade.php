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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="portlet portlet-default">
                    <div class="portlet-heading">
                        <div class="portlet-title">
                            <h4><i class="fa fa-circle text-green"></i> Jane Smith</h4>
                        </div>
                        <div class="portlet-widgets">
                            <div class="btn-group">
                                <button type="button" class="btn btn-white dropdown-toggle btn-xs" data-toggle="dropdown">
                                    <i class="fa fa-circle text-green"></i> Status
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><i class="fa fa-circle text-green"></i> Online</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle text-orange"></i> Away</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                                    </li>
                                </ul>
                            </div>
                            <span class="divider"></span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="chat" class="panel-collapse collapse in">
                        <div>
                            <div class="portlet-body chat-widget" style="overflow-y: auto; overflow-x:visible;width: 400px; height: 300px;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/1/" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jane Smith
                                                    <span class="small pull-right">12:23 PM</span>
                                                </h4>
                                                <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">John Smith
                                                    <span class="small pull-right">12:28 PM</span>
                                                </h4>
                                                <p>Yeah I did. Everything looks good.</p>
                                                <p>Did you have an update on purchase order #302?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Jane Smith
                                                    <span class="small pull-right">12:39 PM</span>
                                                </h4>
                                                <p>No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="portlet-footer">
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Enter message..."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-default pull-right">Send</button>
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



@endsection








