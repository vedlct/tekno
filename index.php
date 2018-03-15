<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!--    <link href="style-contact-form.css" rel="stylesheet" type="text/css" />-->
    <style>
        body {padding-top:20px;}

        form { display: block; margin: 20px auto;
            background: #f6f6f6;; border-radius: 10px; padding: 15px }

        /*.progress { position:relative; width:100%; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }*/
        /*.bar { background-color: wheat; width:0%; height:20px; border-radius: 3px; }*/
        /*.percent { position:absolute; display:inline-block; top:3px; left:48%; }*/
    </style>

</head>
<body>

<div class="container">
    <div class="form-group">
        <label class="form-input">Please Select Job Request Type :</label>
    </div>
      <select class="form-control input-height" required id="job" name="job"   onchange="selectjob()">
          <option value="">SELECT JOB REQUEST</option>
          <option value="brochure">brochure</option>
          <option value="Website">Website</option>
          <option value="Leaflet">Leaflet</option>
          <option value="Banner">Banner/Flyer</option>
          <option value="Corporate">Corporate-CI</option>
          <option value="Logo">LOGO</option>
          <option value="Vector">Vector</option>
      </select>

<!--    websiteform-->

    <div id="websiteform" style="display: none">

        <form action="" method="post">
            <input type="hidden" name="action" value="smail" />
            <input type="hidden" name="content" value="formular"/>

        <legend class="text-center">Contact data</legend>


        <div class="form-group">
            <label class="col-sm-3 control-label" for="name"> Company Name:*</label>
            <div class="col-sm-9">
                <input class="form-control" type="email" name="CompanyEmail" placeholder="Company Email"><br>
            </div>
        </div>


            <div class="form-group">
                <label style="margin-right: 20px;" class="col-sm-3 control-label"> Website Type:*</label>
                <div >
                        <input  class="form-check-input" required name="WebsiteType" type="checkbox" value="Personal">Personal
                        <input class="form-check-input" required name="WebsiteType" type="checkbox" value="Business">Business &nbsp;&nbsp;
                        <input class="form-check-input" required name="WebsiteType" type="checkbox" value="e-Commerce">e-Commerce
                </div>
            </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">Business Detail:*</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="BusinessDetail"   required rows="6" placeholder="Please describe in short about your business" ></textarea></br>

                    </div>
                </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name"> Number Of Page;*</label>
            <div class="col-sm-9">
                <input class="form-control" type="number" name="NumberOfPages" required> <br>
            </div>
        </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"> Portfolio Page:</label>

                        <div class="col-sm-2">
                        <input  type="radio" name="" id="" value="yes">Yes
                        <input  type="radio" name="" id="" value="no">No
                        </div>
                    </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Website Content Management:</label>

                <input  type="radio" name="ContentManage" id="ContentManage0" value="Static">Static
                <input  type="radio" name="ContentManage" id="ContentManage0" value="Static" >Dynamic (CMS based)

        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label" for="name"> Reference Website:*</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="ReferenceWeb" c rows="6" placeholder="Please provide one or more than one URLs of websites you prefer"></textarea></br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Social Media URLs:*</label>
            <div class="col-sm-9">
                <textarea class="form-control"  name="MediaURLs" cols="30" rows="6" placeholder="Please provide your company’s social media account URLs (if any)"></textarea></br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Existing Website (if any):</label>
            <div class="col-sm-9">
                <input class="form-control" type="email" name="ExistingWeb" placeholder="Existing Website" ><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Other Comments (if any):</label>
            <div class="col-sm-9">
                <textarea class="form-control"name="OtherComments" cols="30" rows="6" placeholder="Please mention some words regarding your primary requirements (it may change / increase / decrease in future if you want so)"></textarea></br>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">Estimated Development Time:*</label>
            <div class="col-sm-9">
                <textarea class="form-control"type="text" name="ExistingWeb" placeholder="Give Estimated Development Time"  required></textarea><br>
            </div>

        </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="name">File:</label>
                <div class="col-sm-9">
                    <input class="form-control" type="file"  name="myfile[]" multiple><br>
                </div>
            </div>
            &nbsp;

            <div class="progress" style="margin-top: 50px; margin-bottom: 20px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="00"
                     aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>

            <div id="status"></div>


            <legend>Your Action</legend>
            <div style="text-align: center;margin-bottom:2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
            <div class="buttons" style="text-align: center">
                <input type="submit" name="mt-mk" value="submit"  style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
                <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
            </div>


        </form>
    </div>

    <!--  Leaflet Form -->
    <div id="Leafletform" style="display: none">


        <form class="form-horizontal" action="">

            <input type="hidden" name="action" value="smail" />
            <input type="hidden" name="content" value="formular"/>

            <fieldset class="kontaktdaten">
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
                        <textarea class="form-control" type="number" id="TextSoftFile" name="TextSoftFile" required="required"></textarea>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="example-tel-input" class="col-sm-3 control-label">Estimated Time: </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" type="text" id="TextSoftFile" name="TextSoftFile" required="required"></textarea>
                    </div>
                </div>


                <div class="form-group">
                    <label for="example-color-input" class="col-sm-3 control-label">Attach Logo & Images: </label>
                    <div class="col-sm-9">
                        <input class="form-control" type="file" name="DevelopmentTime">
                    </div>
                </div>

                <div class="progress"  style="margin-top: 50px; margin-bottom: 20px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="00"
                         aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        <span class="sr-only">0% Complete</span>
                    </div>
                </div>

                <div id="status"></div>


            </fieldset>


            <fieldset>
                <legend>Your Action</legend>
                <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
                <div class="buttons" style="text-align: center">
                    <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
                    <input type="rest" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
                </div>
            </fieldset>
        </form>
    </div>


    <!-- Banner Form-->

    <div id="Bannerform" style="display: none">
        <form action="" method="post" class="form-horizontal">
            <input type="hidden" name="action" value="smail" />
            <input type="hidden" name="content" value="formular"/>
            <fieldset class="kontaktdaten">
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
                    <input type="file" class="form-control"  name="AttachLogo" required>
                </div>
            </div>
            &nbsp;

            <div class="progress"  style="margin-top: 50px; margin-bottom: 20px;">
                <div class="progress-bar" role="progressbar" aria-valuenow="00"
                     aria-valuemin="0" aria-valuemax="100" style="width:0%">
                    <span class="sr-only">0% Complete</span>
                </div>
            </div>

            <div id="status"></div>
            </fieldset>



            <fieldset>
                <legend>Your Action</legend>
                <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
                <div class="buttons" style="text-align: center">
                    <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
                    <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
                </div>
            </fieldset>
        </form>
    </div>


    <!--    Corporate-->

    <div id="Corporateform" style="display: none" >
        <form action="" method="post"  class="form-horizontal">
            <input type="hidden" name="action" value="smail" />
            <input type="hidden" name="content" value="formular"/>

            <fieldset class="kontaktdaten">
                <legend>Brochure</legend>

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
                        <input type="file" class="form-control"  name="LogoFile" required>
                    </div>
                </div>






                <div class="progress"  style="margin-top: 50px; margin-bottom: 20px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="00"
                         aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        <span class="sr-only">0% Complete</span>
                    </div>
                </div>

                <div id="status"></div>


            </fieldset>


            <fieldset>
                <legend>Your Action</legend>
                <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
                <div class="buttons" style="text-align: center">
                    <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
                    <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
                </div>
            </fieldset>
        </form>
    </div>


    <!--    Logoform-->

    <div id="Logoform" style="display: none">
        <form action="" method="post" >
            <input type="hidden" name="action" value="smail" />
            <input type="hidden" name="content" value="formular"/>


                <legend>Logo</legend>

                <div class="form-group">
                    <label class="control-label col-sm-3" >Company Name:*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Enter Company Name" name="CompanyName">
                    </div>
                </div>

                <div class="form-group" style="margin-top: 6%; margin-bottom: 3%; ">
                    <label style="margin-right: 110px;" class="control-label col-sm-2" >Logo Shape:*</label>

                    <div required="required" >
                        <input type="radio" name="LogoShape" id="LogoShape0" value="Rectangular"  /> Rectangular
                        <input type="radio" name="LogoShape" id="LogoShape1" value="Square"  /> Square &nbsp;&nbsp;
                        <input type="radio" name="LogoShape" id="LogoShape2" value="Oval"  /> Oval media cover

                        &nbsp;&nbsp;
                    </div>
                </div>
                <br>


                <div class="form-group" style="margin-bottom: 40px">
                    <label class="control-label col-sm-3" >Prefered Color:*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Enter color name" name="PreferredColour">
                    </div>
                </div>
                <br>

                <div class="form-group"  style="margin-bottom: 80px">
                    <label class="control-label col-sm-3" >Business Type:*</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Enter Business Tpe" name="BusinessType">
                    </div>
                </div>


                <div class="form-group"  style="margin-bottom: 40px">
                    <label class="control-label col-sm-3" >Other comments:</label>
                    <div class="col-sm-9">

                        <textarea id="OtherComments" name="OtherComments" rows="6" required="required" class="form-control"></textarea>
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
        <form action="" method="post"  style="" class="form-horizontal">
            <input type="hidden" name="action" value="smail" />
            <input type="hidden" name="content" value="formular"/>

            <fieldset class="kontaktdaten">
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

                        <input type="file" id="ResImage" name="ResImage" required="required" class="form-control"  multiple/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Comments (optional): </label>
                    <div class="col-sm-9">

                        <textarea id="Comments" name="Comments" rows="6" class="form-control"></textarea>
                    </div>
                </div>



                <div class="progress"  style="margin-top: 50px; margin-bottom: 20px;">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        <span class="sr-only">70% Complete</span>
                    </div>
                </div>

                <div id="status"></div>


            </fieldset>


            <fieldset>
                <legend>Your Action</legend>
                <div style="text-align: center;margin-bottom: 2%;"><b>Advice: Fields with <span>*</span> have to be filled.</b></div>
                <div class="buttons" style="text-align: center">
                    <input type="submit" name="mt-mk" value="Send" onclick="tescht();" style="width: 40%;margin-right:5%; " class="btn btn-success btn-md"/>
                    <input type="reset" name="delete" value="reset" style="width: 40%" class="btn btn-danger btn-md"/>
                </div>
            </fieldset>
        </form>
    </div>

<!--    Brochure-->

<div id="Brochureform" style="display: none">
    <form action="" method="post" >
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
                <textarea class="form-control" id="BrochureType" name="BrochureType" rows="6" required="required" ></textarea></br>
            </div>
        </div>


        <div class="form-group">
            <label class="col-md-3 control-label" for="name"  style="margin-right: 13px" >Main Focus: </label>
            <input  type="radio"name="MainFocus" id="MainFocus0" value="ProductShowcase"                                                                                                                                                  /> Product showcase &nbsp;&nbsp;
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
                <input type="file" id="AttachLogo" name="AttachLogo">
            </div>
        </div>
        &nbsp;



        <div class="progress"  style="margin-top: 50px; margin-bottom: 20px;">
            <div class="progress-bar" role="progressbar" aria-valuenow="00"
                 aria-valuemin="0" aria-valuemax="100" style="width:0%">
                <span class="sr-only">0% Complete</span>
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



</body>
</html>

    <script>
    function selectjob() {
        var x = document.getElementById("job").value;
        if (typeof x !== 'undefined') {


            if (x == "Website") {
                document.getElementById("websiteform").style.display = "block";
                document.getElementById("Leafletform").style.display = "none";
                document.getElementById("Bannerform").style.display = "none";
                document.getElementById("Corporateform").style.display = "none";
                document.getElementById("Logoform").style.display = "none";
                document.getElementById("Vectorform").style.display = "none";
                document.getElementById("Brochureform").style.display = "none";


            }
            if (x == "Leaflet") {
                document.getElementById("Leafletform").style.display = "block";
                document.getElementById("websiteform").style.display = "none";
                document.getElementById("Bannerform").style.display = "none";
                document.getElementById("Corporateform").style.display = "none";
                document.getElementById("Logoform").style.display = "none";
                document.getElementById("Vectorform").style.display = "none";
                document.getElementById("Brochureform").style.display = "none";


            }
            if (x == "Banner") {
                document.getElementById("Bannerform").style.display = "block";
                document.getElementById("Leafletform").style.display = "none";
                document.getElementById("websiteform").style.display = "none";
                document.getElementById("Corporateform").style.display = "none";
                document.getElementById("Logoform").style.display = "none";
                document.getElementById("Vectorform").style.display = "none";
                document.getElementById("Brochureform").style.display = "none";


            }
            if (x == "Corporate") {
                document.getElementById("Bannerform").style.display = "none";
                document.getElementById("Leafletform").style.display = "none";
                document.getElementById("websiteform").style.display = "none";
                document.getElementById("Corporateform").style.display = "block";
                document.getElementById("Logoform").style.display = "none";
                document.getElementById("Vectorform").style.display = "none";
                document.getElementById("Brochureform").style.display = "none";


            }

            if (x == "Logo") {
                document.getElementById("Bannerform").style.display = "none";
                document.getElementById("Leafletform").style.display = "none";
                document.getElementById("websiteform").style.display = "none";
                document.getElementById("Corporateform").style.display = "none";
                document.getElementById("Logoform").style.display = "block";
                document.getElementById("Vectorform").style.display = "none";
                document.getElementById("Brochureform").style.display = "none";


            }
            if (x == "Vector") {
                document.getElementById("Bannerform").style.display = "none";
                document.getElementById("Leafletform").style.display = "none";
                document.getElementById("websiteform").style.display = "none";
                document.getElementById("Corporateform").style.display = "none";
                document.getElementById("Logoform").style.display = "none";
                document.getElementById("Vectorform").style.display = "block";
                document.getElementById("Brochureform").style.display = "none";


            }
            if (x == "brochure") {
                document.getElementById("Bannerform").style.display = "none";
                document.getElementById("Leafletform").style.display = "none";
                document.getElementById("websiteform").style.display = "none";
                document.getElementById("Corporateform").style.display = "none";
                document.getElementById("Logoform").style.display = "none";
                document.getElementById("Vectorform").style.display = "none";
                document.getElementById("Brochureform").style.display = "block";


            }


        }

 }
</script>

