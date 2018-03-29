@include('head')
<body>
<div class="">
    @include('menu')

    <div id="theGrid" class="main">
        <div id="messageDiv">
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
        </div>

        @yield('content')

    </div>

</div>


<!-- /container -->
@include('footer')