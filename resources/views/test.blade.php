@extends('main')



@section('content')

 {{--<img src="{{url('public/images/1522219203.png')}}">--}}
 {{--<img src="public/images/1522219203.png">--}}
 {{--<img src="{{ Image::path('public/images/1522219203.png', 'resizeCrop', 400, 200) }}" />--}}
 <img src="image.php?file=public/images/1522219203.png&amp;transform=resize,1000" sizes="25vw">




    @endsection