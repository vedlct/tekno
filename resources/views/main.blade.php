@include('head')
<body>
<div class="">
    @include('menu')
    <div id="theGrid" class="main">

        @yield('content')

    </div>

</div>


<!-- /container -->
@include('footer')