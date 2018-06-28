<!-- Banner Form-->

<div id="Bannerform" >
    <form action="{{route('storeBanner')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>

        <legend>Banner</legend>

        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Company Name:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" placeholder="Company name" name="companyName" id="example-text-input"></br>
                @if ($errors->has('companyName'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('companyName') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name"> Company Email:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" placeholder="email" name="email" id="email" required></br>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Phone Number:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" placeholder="number" name="phoneNumber" id="email" required></br>

                @if ($errors->has('phoneNumber'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('phoneNumber') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Banner Size:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Banner Size"  name="bannerSize" required>
                @if ($errors->has('bannerSize'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('bannerSize')}}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Business Area:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Business Area"  name="BusinessArea" required>
                @if ($errors->has('BusinessArea'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('BusinessArea') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Headline(if ready): </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter HeadLine"  name="Headline" required>
                @if ($errors->has('Headline'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('Headline') }}</strong>
                    </span>
                @endif
            </div>
        </div>





        <div class="form-group" style="margin-top: 30px; ">
            <label class="control-label col-sm-3" >Banner Type: </label>

            <div required="required" >
                <div class="col-sm-2">   <input type="radio" name="BannerType" id="BannerType0" value="WebsiteBanner"  /> Website Banner &nbsp;&nbsp;&nbsp;  </div>&nbsp;
                <div class="col-sm-2"> <input type="radio" name="BannerType" id="BannerType2" value="SocialMediaCover"  /> Social Media Cover &nbsp;&nbsp;</div>
                <div class="col-sm-2"><input type="radio" name="BannerType" id="BannerType1" value="Promotional"  /> Promotional </div>

                &nbsp;&nbsp;</div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Text (soft file, which will be live on leaflet):  </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter text file"  name="TextSoftFile" required>
                @if ($errors->has('TextSoftFile'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('TextSoftFile') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >References (if any): </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Reference"  name="references" required>
                @if ($errors->has('references'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('references') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Estimated Time: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Estimated Time"  name="EstimatedTime" required>
                @if ($errors->has('EstimatedTime'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('EstimatedTime') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Comments (optional): </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Comments" name="Comments" required>
                @if ($errors->has('Comments'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('Comments') }}</strong>
                    </span>
                @endif
            </div>
        </div>






        <div class="form-group" >
            <label class="control-label col-sm-3" >Attach Logo & Images:</label>
            <div class="col-sm-9">
                <input type="file" class=""  name="AttachLogo[]" accept="image/*" multiple>
                @if ($errors->has('AttachLogo'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('AttachLogo') }}</strong>
                    </span>
                @endif

            </div>
        </div>
        &nbsp;

        {{--<div class="progress">--}}
            {{--<div class="bar"></div >--}}
            {{--<div class="percent">0%</div >--}}
        {{--</div>--}}

        {{--<div id="status"></div>--}}
        {{--<div class="form-group" >--}}
            {{--<label class="control-label col-sm-3" >Sales representative (only for our team member): </label>--}}
            {{--<div class="col-sm-9">--}}
                {{--<select class="form-control" name="userId">--}}
                    {{--<option value="">please select one</option>--}}
                    {{--@foreach($users as $user)--}}
                        {{--<option value="{{$user->user_id}}">{{$user->username}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}

            {{--</div>--}}
        {{--</div>--}}


        <legend>Your Action</legend>
        <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
        <div class="buttons" style="text-align: center">
            <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
            <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>

    </form>
</div>

