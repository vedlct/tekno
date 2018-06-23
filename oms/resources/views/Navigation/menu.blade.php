
<li>
    <a href="{{url('/Home')}}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li>
@if(Auth::user()->user_type != USERTYPE[2])
<li>
    <a  href="{{route('adminnewjobrequest')}}">
        <i class="fa fa-briefcase"></i>
        <span>New Job Request</span>
    </a>
</li>
@endif
<li>
    <a  href="{{route('job.all')}}">
        <i class="fa fa-briefcase"></i>
        <span>All Jobs</span>
    </a>
</li>
@if(Auth::user()->user_type != USERTYPE[2])
<li class="sub-menu">
    <a href="javascript:;" >
        <i class="fa fa-laptop"></i>
        <span>Projects</span>
    </a>
    <ul class="sub">
        <li><a  href="{{route('ongoingjob')}}">On Going</a></li>
        <li><a  href="{{route('finshedjob')}}">Done</a></li>
    </ul>
</li>

<li>
    <a href="{{route('job.sale')}}"><i class="fa fa-bookmark"></i> Sales</a>
</li>
@endif
<li>
    <a href="{{route('job.request')}}"><i class="fa fa-plus"></i> Insert Job</a>
</li>
@if(Auth::user()['user_type']==USERTYPE[0])
<li class="sub-menu">
    <a href="{{route('user.create')}}" >
        <i class="fa fa-plus"></i>   Create New User
    </a>

</li>
@endif
<li>
    <a  href="{{route('clintinfo')}}">
        <i class="fa fa-users"></i>
        <span>Clients Info</span>
    </a>
</li>
<li class="sub-menu">
    <a href="javascript:;" >
        <i class="fa fa-laptop"></i>
        <span>Others</span>
    </a>
    <ul class="sub">

        <li><a  href="{{route('passchange')}}">
                @if(Auth::user()->user_type==USERTYPE[0])
                    User Info
                @else
                    Password Change
                @endif
                </a></li>
    </ul>
</li>

<li class="sub-menu">
    {{--<a href="{{route('usersms')}}" >--}}
    {{--<i class="fa fa-comment"></i>--}}
    {{--<span>Message</span>--}}
    {{--</a>--}}

    {{--<a href="{{route('usersms',['client'=>session('order')])}}"  >--}}
        {{--<i class="fa fa-comment"></i>--}}
        {{--<span>Message</span><span id="output1" style="color:#FFF;;margin: 1px;font-size: 13px;"></span>--}}
    {{--</a>--}}

</li>




{{--<li>--}}
    {{--<a href="{{url('/Home')}}">--}}
        {{--<i class="fa fa-dashboard"></i>--}}
        {{--<span>Dashboard</span>--}}
    {{--</a>--}}
{{--</li>--}}
{{--<li>--}}
    {{--<a  href="{{route('adminnewjobrequest')}}">--}}
        {{--<i class="fa fa-briefcase"></i>--}}
        {{--<span>New Job Request</span>--}}
    {{--</a>--}}
{{--</li>--}}
{{--<li>--}}
    {{--<a  href="{{route('newuserrequest')}}">--}}
        {{--<i class="fa fa-user"></i>--}}
        {{--<span>New User Request</span>--}}
    {{--</a>--}}
{{--</li>--}}
{{--<li class="sub-menu">--}}
    {{--<a href="javascript:;" >--}}
        {{--<i class="fa fa-laptop"></i>--}}
        {{--<span>Work</span>--}}
    {{--</a>--}}
    {{--<ul class="sub">--}}
        {{--<li><a  href="{{route('ongoingjob')}}">On Going</a></li>--}}
        {{--<li><a  href="{{route('finshedjob')}}">Done</a></li>--}}
    {{--</ul>--}}
{{--</li>--}}
{{--<!--<li>--}}
    {{--<a  href="JobInfo.php">--}}
        {{--<i class="fa fa-spinner"></i>--}}
        {{--<span>Work</span>--}}
    {{--</a>--}}
{{--</li>-->--}}





{{--<li class="sub-menu">--}}
    {{--<a href="{{route('adminsms')}}" >--}}
        {{--<i class="fa fa-comment"></i>--}}
        {{--<span>Message</span><span id="output2" style="color:#FFF;;margin: 1px;font-size: 13px;"></span>--}}
    {{--</a>--}}

{{--</li>--}}


