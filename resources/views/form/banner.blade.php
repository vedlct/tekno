<!-- Banner Form-->

<div id="Bannerform" >
    <form action="bannerEmail.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>

        <legend>Banner</legend>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Name: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control"  placeholder="Enter Company Name" name="Company Name" required>
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Banner Size:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Banner Size"  name="BrochureSize" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Business Area:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Business Area"  name="BusinessArea" required>
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Headline(if ready): </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter HeadLine"  name="Headline" required>
            </div>
        </div>





        <div class="form-group" style="margin-top: 30px; ">
            <label class="control-label col-sm-3" >Banner Type: </label>

            <div required="required" >
                <div class="col-sm-2">   <input type="radio" name="BannerType" id="BannerType0" value="WebsiteBanner"  /> Website Banner &nbsp;&nbsp;&nbsp;  </div>&nbsp;
                <div class="col-sm-2"> <input type="radio" name="BannerType" id="BannerType2" value="SocialMediaCover"  /> Social Media Cover &nbsp;&nbsp;</div>
                <div class="col-sm-2"><input type="radio" name="BannerType" id="BannerType1" value="Promotional"  /> Promotional </div>

                &nbsp;&nbsp;
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Text (soft file, which will be live on leaflet):  </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter text file"  name="TextSoftFile" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >References (if any): </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Reference"  name="references" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Estimated Time: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Estimated Time"  name="EstimatedTime" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Comments (optional): </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Comments" name="Comments" required>
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Attach Logo & Images:</label>
            <div class="col-sm-9">
                <input type="file" class=""  name="AttachLogo[]" required>
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

