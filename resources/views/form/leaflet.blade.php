<!--  Leaflet Form -->
<div id="Leafletform">


    <form class="form-horizontal" action="leafletEmail.php" enctype="multipart/form-data" >

        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>


        <legend>Leaflet</legend>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Name </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Company Name" name="CompanyName" required>
            </div>
        </div>




        <div class="form-group" >
            <label class="control-label col-sm-3" >Leaflet Size:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Size" name="LeafletSize" required>
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Business Area:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Area" name="BusinessArea" required>
            </div>
        </div>

        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Website:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter URL" name="CompanyWebsite" required>
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Email Address:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" placeholder="Enter Email" name="EmailAddress" required>
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Phone Number:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Enter Comments" name="PhoneNumber" required>
            </div>
        </div>




        <div class="form-group" >
            <label class="control-label col-sm-3" >Company Address:</label>
            <div class="col-sm-9">

                <textarea class="form-control" id="exampleTextarea" name="CompanyAddress" rows="3" placeholder="Please give Company Address" required></textarea>
            </div>
        </div>




        <div class="form-group" style="margin-top: 30px; ">
            <label class="control-label col-sm-3" >Main Focus: </label>

            <div required="required" >
                <div class="col-sm-3">  <input class="form-check-input" type="radio" name="blankRadio" id="blankRadio1" value="option1" >Product showcase  </div>
                <div class="col-sm-2"> <input class="form-check-input" type="radio" name="blankRadio" id="blankRadio1" value="option2" >Promotional</div>

                &nbsp;&nbsp;
            </div>
        </div>



        <div class="form-group" >
            <label class="control-label col-sm-3" >Tagline / Slogan (if any):</label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  name="TaglineSlogan" required>
            </div>
        </div>


        <div class="form-group" >
            <label class="control-label col-sm-3" >Text (soft file, which will be live on leaflet): </label>
            <div class="col-sm-9">
                <input type="number" class="form-control"  name="TextSoftFile" required>
            </div>
        </div>




        <div class="form-group" >
            <label class="control-label col-sm-3" >Company social media urls. (if any):</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="exampleTextarea" rows="3"placeholder="Please give Company Address"></textarea>
            </div>
        </div>







        <div class="form-group">
            <label for="example-tel-input" class="col-sm-3 control-label">References (if any):</label>
            <div class="col-sm-9">
                <textarea class="form-control" type="number" id="TextSoftFile" name="TextSoftFile" required></textarea>
            </div>
        </div>


        <div class="form-group row">
            <label for="example-tel-input" class="col-sm-3 control-label">Estimated Time: </label>
            <div class="col-sm-9">
                <textarea class="form-control" type="text" id="TextSoftFile" name="TextSoftFile" required></textarea>
            </div>
        </div>


        <div class="form-group">
            <label for="example-color-input" class="col-sm-3 control-label">Attach Logo & Images: </label>
            <div class="col-sm-9">
                <input class="" type="file" name="DevelopmentTime">
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
            <input type="rest" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
        </div>

    </form>
</div>
