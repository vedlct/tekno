<!--    Logoform-->

<div id="Logoform" >
    <form action="{{route('storeLogo')}}" method="post" >
        {{csrf_field()}}
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend>Logo</legend>

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

        <div class="form-group" style="margin-top: 6%; margin-bottom: 3%; ">
            <label style="margin-right: 110px;" class="control-label col-sm-2" >Logo Shape:*</label>

            <div required="required" >
                <input type="radio" name="LogoShape" id="LogoShape0" value="Rectangular"  /> Rectangular
                <input type="radio" name="LogoShape" id="LogoShape1" value="Square"  /> Square &nbsp;&nbsp;
                <input type="radio" name="LogoShape" id="LogoShape2" value="Oval"  /> Oval media cover

                &nbsp;&nbsp;</div>
        </div>
        <br>


        <div class="form-group" style="margin-bottom: 40px">
            <label class="control-label col-sm-3" >Prefered Color:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter color name" name="PreferredColour">
                @if ($errors->has('PreferredColour'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('PreferredColour') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <br>

        <div class="form-group"  style="margin-bottom: 80px">
            <label class="control-label col-sm-3" >Business Type:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Business Tpe" name="BusinessType">
                @if ($errors->has('BusinessType'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('BusinessType') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group"  style="margin-bottom: 40px">
            <label class="control-label col-sm-3" >Other comments:</label>
            <div class="col-sm-9">

                <textarea id="OtherComments" name="OtherComments" rows="6" required class="form-control"></textarea>
                @if ($errors->has('OtherComments'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('OtherComments') }}</strong>
                    </span>
                @endif
            </div>
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

<!--    Vectorform-->

<div id="Vectorform" style="display: none" >
    <form action="vectorEmail.php" method="post"  style="" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend><h2>Vector</h2></legend>


        <div class="form-group">
            <label class="control-label col-sm-3" >Company Name:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Company Name" name="CompanyName">
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-3" >Attach High Res Image: *</label>
            <div class="col-sm-9">

                <input type="file" id="ResImage" name="ResImage[]" required="required" class=""  multiple/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Comments (optional): </label>
            <div class="col-sm-9">

                <textarea id="Comments" name="Comments" rows="6" class="form-control"></textarea>
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






        <legend>Your Action</legend>
        <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
        <div class="buttons" style="text-align: center">
            <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
            <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>

    </form>
</div>
