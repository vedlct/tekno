<!--  Leaflet Form -->
<div id="Leafletform">


    <form class="form-horizontal" action="{{route('storeLeaflet')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}

        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend>Leaflet</legend>

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
            <label class="control-label col-sm-3" >Leaflet Size:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Size" name="LeafletSize" required>
                @if ($errors->has('LeafletSize'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('LeafletSize') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Business Area:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Area" name="BusinessArea" required>
                @if ($errors->has('BusinessArea'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('BusinessArea') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Website:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter URL" name="CompanyWebsite" required>
                @if ($errors->has('CompanyWebsite'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('CompanyWebsite') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Email Address:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="Enter Email" name="EmailAddress" required>
                @if ($errors->has('EmailAddress'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('EmailAddress') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Phone Number:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Comments" name="PhoneNumber" required>
                @if ($errors->has('PhoneNumber'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('PhoneNumber') }}</strong>
                    </span>
                @endif
            </div>
        </div>




        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Address:</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="exampleTextarea" name="CompanyAddress" rows="3" placeholder="Please give Company Address" required></textarea>
                @if ($errors->has('CompanyAddress'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('CompanyAddress') }}</strong>
                    </span>
                @endif
            </div>
        </div>




        <div class="form-group" style="margin-top: 30px; ">
            <label class="control-label col-sm-3" >Main Focus: </label>

            <div required="required" >
                <div class="col-sm-3">  <input class="form-check-input" type="radio" name="mainFocus" id="blankRadio1" value="Product showcase" >Product showcase </div>
                <div class="col-sm-2"> <input class="form-check-input" type="radio" name="mainFocus" id="blankRadio1" value="Promotional" >Promotional</div>

                &nbsp;&nbsp;</div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Tagline / Slogan (if any):</label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  name="TaglineSlogan" required>
                @if ($errors->has('TaglineSlogan'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('TaglineSlogan') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Text (soft file, which will be live on leaflet): </label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  name="TextSoftFile" required>
                @if ($errors->has('TextSoftFile'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('TextSoftFile') }}</strong>
                    </span>
                @endif
            </div>
        </div>




        <div class="form-group" >
            <label class="control-label col-sm-3" >Company social media urls. (if any):</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="exampleTextarea" rows="3" name="companyMediaUrlAddress" placeholder="Please give Company Address"></textarea>
                @if ($errors->has('companyAddress'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('companyAddress') }}</strong>
                    </span>
                @endif
            </div>
        </div>







        <div class="form-group">
            <label for="example-tel-input" class="col-sm-3 control-label">References (if any):</label>
            <div class="col-sm-9">
                <textarea class="form-control" type="number" id="TextSoftFile" name="references" required></textarea>
                @if ($errors->has('references'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('references') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        {{--<div class="form-group row">--}}
            {{--<label for="example-tel-input" class="col-sm-3 control-label">Estimated Time: </label>--}}
            {{--<div class="col-sm-9">--}}
                {{--<textarea class="form-control" type="text" id="TextSoftFile" name="EstimatedTime" required></textarea>--}}
                {{--@if ($errors->has('EstimatedTime'))--}}
                    {{--<span class="invalid-feedback">--}}
                        {{--<strong>{{ $errors->first('EstimatedTime') }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Estimated Time:  </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="EstimatedTime" name="EstimatedTime"></br>
                @if ($errors->has('EstimatedTime'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('EstimatedTime') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label for="example-color-input" class="col-sm-3 control-label">Attach Logo & Images: </label>
            <div class="col-sm-9">
                <input type="file" id="AttachLogo[]" name="AttachLogo[]" multiple>
                @if ($errors->has('AttachLogo'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('AttachLogo') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        {{--<div class="progress">--}}
            {{--<div class="bar"></div >--}}
            {{--<div class="percent">0%</div >--}}
        {{--</div>--}}

        {{--<div id="status"></div>--}}

        <div class="form-group" >
            <label class="control-label col-sm-3" >Sales representative (only for our team member): </label>
            <div class="col-sm-9">
                <select class="form-control" name="userId">
                    <option value="">please select one</option>
                    @foreach($users as $user)
                        <option value="{{$user->user_id}}">{{$user->username}}</option>
                    @endforeach
                </select>

            </div>
        </div>



        <br><br>
        <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
        <div class="buttons" style="text-align: center">
            <input type="submit" name="mt-mk" value="Send" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
            <input type="rest" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>

    </form>
</div>
