<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="{{url('/Home')}}" class="logo">Order <span>Management </span>System</a>


    <!--logo end-->
    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder="Search">
            </li>

            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="{{url('img/avatar1_small.jpg')}}">
                    <span class="username">Welcome {{session('order')}}</span>
                    <b class="caret"></b>
                </a>

                <ul class="dropdown-menu extended logout">
                    {{--<div class="log-arrow-up">df</div>--}}
                    @if(session('user-type')=='Admin')
                    <span align="center"><li><a href="{{route('adminprofile') }}"><i class=" fa fa-suitcase"></i><br>Profile</a></li></span>
                    @elseif(session('user-type')=='User')

                    {{--<li><a href="{{route('userprofile')}}"><i class=" fa fa-suitcase"></i>Profile</a></li>--}}

                    <span align="center"><li><a href="{{route('userprofile')}}"><i class=" fa fa-suitcase"></i><br>Profile</a></li></span>

                    @endif
                    {{--<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>--}}
                    <li><a href="{{url('/Logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>