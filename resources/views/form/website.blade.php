
<div id="websiteform">

    <form action="email.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="smail" />
        <input type="hidden" name="content" value="formular"/>

        <legend class="text-center">Website</legend>


        <div class="form-group">
            <label class="col-sm-3 control-label" for="name"> Company Name:*</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="CompanyEmail" placeholder="Company Email"><br>
            </div>
        </div>


        <div class="form-group">
            <label style="margin-right: 20px;" class="col-sm-3 control-label"> Website Type:*</label>
            <div >
                <input  class="form-check-input" name="WebsiteType" type="checkbox" value="Personal"> Personal
                <input class="form-check-input" name="WebsiteType" type="checkbox" value="Business"> Business &nbsp;&nbsp;
                <input class="form-check-input" name="WebsiteType" type="checkbox" value="e-Commerce"> e-Commerce
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
                <input  type="radio" name="" id="" value="yes"> Yes
                <input  type="radio" name="" id="" value="no"> No
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
                <input class="" type="file"  name="myfile[]" multiple><br>
            </div>
        </div>
        &nbsp;

        <div class="progress">
            <div class="bar"></div >
            <div class="percent">0%</div >
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
