<!--    Brochure-->

<div id="Brochureform">
    <form id="target" action="{{route('storeBrochure')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}


        <legend class="text-center">Brochure</legend>

        <div class="form-group">
            <label class="col-md-3 control-label" for="name"> Company Name:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" placeholder="Company name" name="companyName" id="companyName" required></br>

                @if ($errors->has('companyName'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('companyName') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Brochure Size:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="BrochureSize" name="BrochureSize" required="required"></br>
                @if ($errors->has('BrochureSize'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('BrochureSize') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name"  style="margin-right: 13px">Brochure Pages: </label>
            <input  type="radio"name="BrochurePages" id="BrochurePages0" value="HalfFold"  /> Half Fold &nbsp;&nbsp;
            <input type="radio" name="BrochurePages" id="BrochurePages1" value="TriFold"  /> Tri Fold &nbsp;&nbsp;
            <input type="radio" name="BrochurePages" id="BrochurePages2" value="PanelFold"  /> Panel Fold &nbsp;&nbsp;
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Company Business Area:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="BusinessArea" name="BusinessArea" required="required" ></br>
                @if ($errors->has('BusinessArea'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('BusinessArea') }}</strong>
                    </span>
                @endif
            </div>
        </div>




        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Company Theme Color:* </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="ThemeColor" name="ThemeColor" required="required"  ></br>
                @if ($errors->has('ThemeColor'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ThemeColor') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Tagline / Slogan (if any): </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="TaglineSlogan" name="TaglineSlogan"  required="required"  ></br>
                @if ($errors->has('TaglineSlogan'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('TaglineSlogan') }}</strong>
                    </span>
                @endif
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Brochure Type (description)): </label>
            <div class="col-md-9">
                <textarea class="form-control" id="BrochureType" name="BrochureType" rows="6" required ></textarea></br>
                @if ($errors->has('BrochureType'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('BrochureType') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name"  style="margin-right: 13px" >Main Focus: </label>
            <input  type="radio"name="MainFocus" id="MainFocus0" value="ProductShowcase"                                                                                                                                                  /> Product
            showcase &nbsp;&nbsp;
            <input type="radio" name="MainFocus" id="MainFocus1" value="CompanyProfile"  /> company profile &nbsp;&nbsp;
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="name">TText(soft file, which will be live on leaflet):</label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="TextSoftFile" name="TextSoftFile"></br>
                @if ($errors->has('TextSoftFile'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('TextSoftFile') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Company social media urls. (if any):</label>
            <div class="col-md-9">
                <textarea class="form-control" id="SocialMediaURLs" name="SocialMediaURLs" rows="6" ></textarea></br>
                @if ($errors->has('SocialMediaURLs'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('SocialMediaURLs') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">References (if any): </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="References" name="References"></br>
                @if ($errors->has('References'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('References') }}</strong>
                    </span>
                @endif
            </div>
        </div>




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
            <label class="col-md-3 control-label" for="name">Attach Logo & Images: </label><br>
            <div class="col-md-9">
                <input type="file" id="AttachLogo[]" name="AttachLogo[]" multiple>
                @if ($errors->has('AttachLogo'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('AttachLogo') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        &nbsp;



        <div class="progress">
            <div class="bar"></div >
            <div class="percent">0%</div >
        </div>
        <div id="status"></div>




        <legend>Your Action</legend>
        <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
        <div class="buttons" style="text-align: center">
            <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
            <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>


    </form>

</div>


<script>
    $( "#target" ).submit(function( event ) {


        event.preventDefault();
    });


</script>
