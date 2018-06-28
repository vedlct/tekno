<!--    Corporate-->

<div id="Corporateform">
    <form action="{{route('storeCorporate')}}" method="post"  class="form-horizontal" enctype="multipart/form-data">
        {{csrf_field()}}

        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend>Corporate-CI</legend>

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
            <label class="control-label col-sm-3" >Company Theme Color:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Company Theme Color" name="ThemeColor" required>
                @if ($errors->has('ThemeColor'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ThemeColor') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Tagline / Slogan (if any):</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Tag Line" name="TaglineSlogan" required>
                @if ($errors->has('TaglineSlogan'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('TaglineSlogan') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Official Email Address:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="Enter Email" name="CompanyEmail" required>
                @if ($errors->has('CompanyEmail'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('CompanyEmail') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Phone number:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Phone Number" name="PhoneNumber" required>
                @if ($errors->has('PhoneNumber'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('PhoneNumber') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Address: :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Address" name="CompanyAddress" required>
                @if ($errors->has('CompanyAddress'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('CompanyAddress') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Name and Designation for visiting cards:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Tag Line" name="VisitingCards" required>
                @if ($errors->has('VisitingCards'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('VisitingCards') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" style="margin-top: 30px; ">
            <label class="control-label col-sm-3" >QR CODE: </label>

            <div required="required" >
                <div class="col-sm-2">  <input type="radio" name="QRcode" id="QRcode0" value="1"  /> YES &nbsp;&nbsp;  </div>&nbsp;
                <div class="col-sm-2"><input type="radio" name="QRcode" id="QRcode1" value="0"  /> NO &nbsp; &nbsp;&nbsp;</div>
                &nbsp;&nbsp;
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >CI Types: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter CI Type" name="CITypes" required>
                e.g. Visiting card / letterhead / envelope/ All
            </div>
            @if ($errors->has('CITypes'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('CITypes') }}</strong>
                    </span>
            @endif

        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Estimated time:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Estimated Time" name="EstimatedTime" required>
                @if ($errors->has('EstimatedTime'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('EstimatedTime') }}</strong>
                    </span>
                @endif

            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Attach logo eps / ai file:</label>
            <div class="col-sm-9">
                <input type="file" id="AttachLogo[]" name="AttachLogo[]" accept="image/*" multiple>
                @if ($errors->has('LogoFile'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('LogoFile') }}</strong>
                    </span>
                @endif
            </div>
        </div>

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




        {{--<div class="progress">--}}
            {{--<div class="bar"></div >--}}
            {{--<div class="percent">0%</div >--}}
        {{--</div>--}}

        {{--<div id="status"></div>--}}






        <legend>Your Action</legend>
        <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
        <div class="buttons" style="text-align: center">
            <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
            <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>

    </form>
</div>

