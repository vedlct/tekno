<div id="Vectorform" >
    <form action="{{route('storeVector')}}" method="post"  style="" id="form1" class="form-horizontal" enctype="multipart/form-data">
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



        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Estimated Development Time:*</label>
            <div class="col-sm-9">
                <input class="form-control"type="text" name="EstimatedTime" placeholder="Give Estimated Development Time"  required>

                <br>
                @if ($errors->has('EstimatedTime'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('EstimatedTime') }}</strong>
                    </span>
                @endif
            </div>

        </div>

        <div id="message"></div><br />
        {{--Progress Bar--}}

        <div class="preview"></div>

        <div class="progress" style="display:none">

            <div class="progress-bar" role="progressbar" aria-valuenow="0"

                 aria-valuemin="0" aria-valuemax="100" style="width:0%">

                0%

            </div>

        </div>



        <legend>Your Action</legend>
        <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
        <div class="buttons" style="text-align: center">
            <input type="submit" name="mt-mk" value="Send"  style="width: 40%;margin-right:5%; " class="btn btn-success btn-md upload-image"/>
            <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>

    </form>
</div>

<script src="http://malsup.github.com/jquery.form.js"></script>
<script>

    $(document).ready(function() {
        $(document).ready(function() {

            var progressbar = $('.progress-bar');

            $(".upload-image").click(function(){

                $("#form1").ajaxForm(

                    {

                        target: '.preview',

                        beforeSend: function() {

                            $(".progress").css("display","block");

                            progressbar.width('0%');

                            progressbar.text('0%');

                        },

                        uploadProgress: function (event, position, total, percentComplete) {

                            progressbar.width(percentComplete + '%');

                            progressbar.text(percentComplete + '%');

                        },

                        success: function()
                        {
//                            $("#bar").width('100%');
//                            $("#percent").html('100%');

//                            location.reload();

                        },
                        complete: function(response)
                        {
                            $("#message").html("<font color='green'><div>"+response.responseText+"</div></font>");
//                            alert('Complete');
//                            location.reload();
//                            alert('Complete');
                        },
                        error: function()
                        {
                            $("#message").html("<font color='red'> ERROR: unable to upload files</font>");

                            alert('Error');
                        }


                    }).submit();

//                    location.reload();




            });

        });

    });


</script>