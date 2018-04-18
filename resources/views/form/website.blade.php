
<div id="websiteform">

    <form action="{{route('storeWebsite')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>

        <legend class="text-center">Website</legend>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Company Name:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" placeholder="Company name" name="companyName" id="example-text-input" required></br>
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
                        <strong>{{ $errors->first('email')}}</strong>
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


        <div class="form-group">
            <label style="margin-right: 20px;" class="col-sm-3 control-label">Website Type:*</label>
            <div >
                &nbsp; &nbsp;   <input  class="form-check-input" name="WebsiteType" type="checkbox" value="Personal"> Personal &nbsp; &nbsp;
                <input class="form-check-input" name="WebsiteType" type="checkbox" value="Business"> Business &nbsp;&nbsp;&nbsp; &nbsp;
                <input class="form-check-input" name="WebsiteType" type="checkbox" value="e-Commerce"> e-Commerce &nbsp; &nbsp;
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Business Detail:*</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="BusinessDetail"   required rows="6" placeholder="Please describe in short about your business" ></textarea></br>
                @if ($errors->has('BusinessDetail'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('BusinessDetail') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name"> Number Of Page;*</label>
            <div class="col-sm-9">
                <input class="form-control" type="number" name="NumberOfPages" required> <br>
                @if ($errors->has('NumberOfPages'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('NumberOfPages') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label"> Portfolio Page:</label>

            <div class="col-sm-2">
                <input  type="radio" name="portfolioPage" id="" value="1"> Yes
                <input  type="radio" name="portfolioPage" id="" value="0"> No
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Website Content Management:</label>
            <input  type="radio" name="ContentManage" id="ContentManage0" value="Static"> Static
            <input  type="radio" name="ContentManage" id="ContentManage0" value="Static" > Dynamic (CMS based)
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label" for="name"> Reference Website:*</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="ReferenceWeb" c rows="6" placeholder="Please provide one or more than one URLs of websites you prefer"></textarea></br>
                @if ($errors->has('ReferenceWeb'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ReferenceWeb') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Social Media URLs:*</label>
            <div class="col-sm-9">
                <textarea class="form-control"  name="MediaURLs" cols="30" rows="6" placeholder="Please provide your company’s social media account URLs (if any)"></textarea></br>
                @if ($errors->has('MediaURLs'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('MediaURLs') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Existing Website (if any):</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="ExistingWeb" placeholder="Existing Website" ><br>
                @if ($errors->has('ExistingWeb'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ExistingWeb') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Other Comments (if any):</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="OtherComments" cols="30" rows="6" placeholder="Please mention some words regarding your primary requirements (it may change / increase / decrease in future if you want so)"></textarea></br>
                @if ($errors->has('OtherComments'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('OtherComments') }}</strong>
                    </span>
                @endif
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Estimated Development Time:*</label>
            <div class="col-sm-9">
                <textarea class="form-control"type="text" name="EstimatedTime" placeholder="Give Estimated Development Time"  required></textarea><br>
                @if ($errors->has('EstimatedTime'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('EstimatedTime') }}</strong>
                    </span>
                @endif
            </div>

        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">File:</label>
            <div class="col-sm-9">
                <input type="file" id="AttachLogo[]" name="AttachLogo[]" multiple>
                @if ($errors->has('myfile'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('myfile') }}</strong>
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
        <div style="text-align: center;margin-bottom:2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
        <div class="buttons" style="text-align: center">
            <input type="submit" name="mt-mk" value="submit"  style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
            <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>


    </form>
</div>
