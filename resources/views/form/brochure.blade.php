<!--    Brochure-->

<div id="Brochureform">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend class="text-center">Brochure</legend>

        <div class="form-group">
            <label class="col-md-3 control-label" for="name"> Company Name:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" placeholder="Company name" id="example-text-input"></br>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Brochure Size:*</label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="BrochureSize" name="BrochureSize" required="required"></br>
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
            </div>
        </div>




        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Company Theme Color:* </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="ThemeColor" name="ThemeColor" required="required"  ></br>
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Tagline / Slogan (if any): </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="TaglineSlogan" name="TaglineSlogan"  required="required"  ></br>
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Brochure Type (description)): </label>
            <div class="col-md-9">
                <textarea class="form-control" id="BrochureType" name="BrochureType" rows="6" required ></textarea></br>
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
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Company social media urls. (if any):</label>
            <div class="col-md-9">
                <textarea class="form-control" id="SocialMediaURLs" name="SocialMediaURLs" rows="6" ></textarea></br>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">References (if any): </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="References" name="References"></br>
            </div>
        </div>




        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Estimated Time:  </label>
            <div class="col-md-9">
                <input class="form-control" type="text" id="EstimatedTime" name="EstimatedTime"></br>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Attach Logo & Images: </label><br>
            <div class="col-md-9">
                <input type="file" id="AttachLogo[]" name="AttachLogo">
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
