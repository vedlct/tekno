<!--    Corporate-->

<div id="Corporateform">
    <form action="corporateEmail.php" method="post"  class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend>Corporate-CI</legend>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Name:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Company Name" name="CompanyName" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Business Area:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Business Area" name="BusinessArea" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Theme Color:*</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Company Theme Color" name="ThemeColor" required>
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Tagline / Slogan (if any):</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Tag Line" name="TaglineSlogan" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Official Email Address:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Email" name="CompanyEmail" required>
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Phone number:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Phone Number" name="PhoneNumber" required>
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Address: :</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Address" name="CompanyAddress" required>
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Name and Designation for visiting cards:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Tag Line" name="VisitingCards" required>
            </div>
        </div>


        <div class="form-group" style="margin-top: 30px; ">
            <label class="control-label col-sm-3" >QR CODE: </label>

            <div required="required" >
                <div class="col-sm-2">  <input type="radio" name="QRcode" id="QRcode0" value="YES"  /> YES &nbsp;&nbsp;  </div>&nbsp;
                <div class="col-sm-2"><input type="radio" name="QRcode" id="QRcode1" value="NO"  /> NO &nbsp; &nbsp;&nbsp;</div>


                &nbsp;&nbsp;
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >CI Types: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter CI Type" name="CITypes" required>
                e.g. Visiting card / letterhead / envelope/ All
            </div>

        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Estimated time:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Estimated Time" name="EstimatedTime" required>
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Attach logo eps / ai file:</label>
            <div class="col-sm-9">
                <input type="file" class=""  name="LogoFile[]" required>
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

