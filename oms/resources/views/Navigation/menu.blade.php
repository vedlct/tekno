
<li>
    <a href="{{url('/Home')}}">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li>
<li>
    <a  href="{{route('adminnewjobrequest')}}">
        <i class="fa fa-briefcase"></i>
        <span>New Job Request</span>
    </a>
</li>

{{--<li>--}}
    {{--<a  href="{{route('usernewjobrequest')}}">--}}
        {{--<i class="fa fa-briefcase"></i>--}}
        {{--<span>All Job Request</span>--}}
    {{--</a>--}}
{{--</li>--}}

<li class="sub-menu">
    <a href="javascript:;" >
        <i class="fa fa-laptop"></i>
        <span>Work</span>
    </a>
    <ul class="sub">
        <li><a  href="{{route('ongoingjob')}}">On Going</a></li>
        <li><a  href="{{route('finshedjob')}}">Done</a></li>
    </ul>
</li>
<li class="sub-menu">
    <a href="{{route('user.create')}}" >
        Create New User
    </a>

</li>
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

        <li><a  href="{{route('passchange')}}">Password Change</a></li>
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


