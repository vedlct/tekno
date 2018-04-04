<div id="Vectorform" >
    <form action="{{route('storeVector')}}" method="post"  style="" class="form-horizontal" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend><h2>Vector</h2></legend>


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
            <label class="control-label col-sm-3" >Attach High Res Image: *</label>
            <div class="col-sm-9">

                <input type="file" id="AttachLogo[]" name="AttachLogo[]" multiple>
                @if ($errors->has('ResImage'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ResImage') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3">Comments (optional): </label>
            <div class="col-sm-9">

                <textarea id="Comments" name="Comments" rows="6" class="form-control"></textarea>
                @if ($errors->has('Comments'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('Comments') }}</strong>
                    </span>
                @endif
            </div>
        </div>



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