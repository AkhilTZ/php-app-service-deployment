<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
</head>
<style>
    body {
    background-color: #FFEBEE;
    font-family: Inter, sans-serif;
}
.swal2-close
{
    display: none !important;
}

.card {
    width: 560px;
    background-color: #fff;
    border: none;
    border-radius: 12px;
    font-family: Inter, sans-serif;
    color: #161C29;
    padding: 0rem 1rem;
}
label {
    font-size: 14px !important;
}

label.radio {
    cursor: pointer;
    width: 100%;
    font-family: Inter, sans-serif;
}

label.radio input {
    position: absolute;
    top: 0;
    left: 0;
    visibility: hidden;
    pointer-events: none;
    font-family: Inter, sans-serif;
}

label.radio span {
    padding: 7px 14px;
    border: 2px solid #eee;
    display: inline-block;
    color: #161C29;
    border-radius: 10px;
    width: 100%;
    height: 48px;
    line-height: 27px;
    font-family: Inter, sans-serif;
}

label.radio input:checked+span {
    border-color: #039BE5;
    background-color: #81D4FA;
    color: #161C29;
    border-radius: 9px;
    height: 48px;
    line-height: 27px;
    font-family: Inter, sans-serif;
}

.form-control {
    margin-top: 10px;
    height: 48px;
    border: 2px solid #eee;
    border-radius: 3px;
    font-family: Inter, sans-serif;
    padding: 12px 16px;
    background: #F8F8F8;
}
.form-control_dob_error {
   background-image:url("data:image/svg+xml,%3csvg width='20' height='20' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='10' cy='10' fill='%23eb5b57' r='10'/%3e%3cpath d='M10 16.733a1.873 1.873 0 1 0 0-3.746 1.873 1.873 0 0 0 0 3.746zm0-13.466a2.205 2.205 0 0 0-2.19 2.479l.786 4.311a1.414 1.414 0 0 0 2.808 0l.785-4.311a2.206 2.206 0 0 0-2.19-2.477Z' fill='white'/%3e%3c/svg%3e") !important;
   background-repeat: no-repeat;
   background-color: rgba(253,238,238,255);
   background-position: 93%;
}
.form-control_error {
   background-image:url("data:image/svg+xml,%3csvg width='20' height='20' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='10' cy='10' fill='%23eb5b57' r='10'/%3e%3cpath d='M10 16.733a1.873 1.873 0 1 0 0-3.746 1.873 1.873 0 0 0 0 3.746zm0-13.466a2.205 2.205 0 0 0-2.19 2.479l.786 4.311a1.414 1.414 0 0 0 2.808 0l.785-4.311a2.206 2.206 0 0 0-2.19-2.477Z' fill='white'/%3e%3c/svg%3e") !important;
   background-repeat: no-repeat;
   background-color: rgba(253,238,238,255);
   background-position: center right 14px;
}
.form-control_bg_error {
   background-color: rgba(253,238,238,255);
}

.form-control:focus {
    box-shadow: 0 0 0 3px rgba(0, 0, 0, .08);
    border: 2px solid #eee !important;
    font-family: Inter, sans-serif;
}
.form-select:focus {
    box-shadow: 0 0 0 3px rgba(0, 0, 0, .08);
    border: 2px solid #eee !important;
    font-family: Inter, sans-serif;
}
.form-control:hover
{
    box-shadow: 0 0 0 3px rgba(0, 0, 0, .08);
    transition: box-shadow .3s;
}

.agree-text {
    font-size: 12px;
    font-family: Inter, sans-serif;
    color: #161C29;
}

.terms {
    font-size: 12px;
    text-decoration: none;
    color: #039BE5;
    font-family: Inter, sans-serif;
    color: #161C29;
}

.confirm-button {
    height: 50px;
    border-radius: 5px;
    font-family: Inter, sans-serif;
    color: #ffffff;
    background-color: #5ec2a1;
    font-weight: 600;
    width: 100%;
    padding: 12px 16px;
    box-shadow: 0 0 0 3px rgba(0,0,0,0),0px 4px 8px -4px rgba(22, 34, 51, 0.08), 0px 16px 24px rgba(22, 34, 51, 0.08);
    border: 1px solid rgba(0, 0, 0, 0);
    transition: .2s,box-shadow .2s;
}
.confirm-button:hover {
    border: 1px solid rgba(0, 0, 0, 0);
    background-color: #67D5B1 !important;
    transition: .3s,box-shadow .32s;
    box-shadow: 0 0 0 3px rgba(22, 34, 51, 0.08),0px 4px 8px -4px rgba(22, 34, 51, 0.08), 0px 16px 24px rgba(22, 34, 51, 0.08);
    color: #ffffff;
}
.input-group>.form-control, .input-group>.form-file, .form-select
{
   width: 100% !important;
   font-family: Inter, sans-serif;
   color: #161C29;
    border-radius: 3px;
}
.email_title{
    font-size: 24px !important;
    color: #161C29;
}
.email_block
{
    margin: 4px 0px 32px 0px;
}
.error
{
    color: #eb5b57;
    font-size: 13px;
    margin-bottom: 0px !important;
}
.field_margin
{
    margin-bottom: 15px; 
}
.validation-message-text{
    font: 16px Inter, sans-serif;
    color: #161C29;
    padding: 15px 0px 0px 10px;
}
.validation_block{
    background-image:url("data:image/svg+xml,%3csvg width='20' height='20' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='10' cy='10' fill='%23eb5b57' r='10'/%3e%3cpath d='M10 16.733a1.873 1.873 0 1 0 0-3.746 1.873 1.873 0 0 0 0 3.746zm0-13.466a2.205 2.205 0 0 0-2.19 2.479l.786 4.311a1.414 1.414 0 0 0 2.808 0l.785-4.311a2.206 2.206 0 0 0-2.19-2.477Z' fill='white'/%3e%3c/svg%3e") !important;
    background-position: center right 14px;
    border-left: 5px solid #eb5b57;
   background-color: rgba(253, 238, 238, 255);
   background-repeat: no-repeat;
    padding-right:48px;

}
/* Bootstrap 5 CSS and icons included */
:root {
  --colorPrimaryNormal: #00b3bb;
  --colorPrimaryDark: #00979f;
  --colorPrimaryGlare: #00cdd7;
  --colorPrimaryHalf: #80d9dd;
  --colorPrimaryQuarter: #bfecee;
  --colorPrimaryEighth: #dff5f7;
  --colorPrimaryPale: #f3f5f7;
  --colorPrimarySeparator: #f3f5f7;
  --colorPrimaryOutline: #dff5f7;
  --colorButtonNormal: #00b3bb;
  --colorButtonHover: #00cdd7;
  --colorLinkNormal: #00979f;
  --colorLinkHover: #00cdd7;
}


.upload_dropZone {
  color: #0f3c4b;
  background-color: #f8f8f8;
  outline-offset: -12px;
  transition:
    outline-offset 0.2s ease-out,
    outline-color 0.3s ease-in-out,
    background-color 0.2s ease-out;
    border-radius: 5px;
}
.upload_dropZone.highlight {
  outline-offset: -4px;
  outline-color: var(--colorPrimaryNormal, #0576bd);
  background-color: var(--colorPrimaryEighth, #c8dadf);
}
.upload_svg {
  fill: var(--colorPrimaryNormal, #0576bd);
}
.btn-upload {
  color: #fff;
  background-color: #5ec2a1;
}
.btn-upload:hover,
.btn-upload:focus {
  color: #fff;
  background-color: #5ec2a1;
}
.upload_img {
  width: calc(33.333% - (2rem / 3));
  object-fit: contain;
}
div:where(.swal2-container) .swal2-html-container{
    overflow: hidden;
}
#cancel_button{
    background-color: #E2383C;
    color: #ffffff;
}
div:where(.swal2-container) div:where(.swal2-popup){
    width: 35em !important;
}
}
</style>
<body>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <form action="javascript:void(0);" id="freshers_form" onsubmit="return FormValidation()" enctype="multipart/form-data">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 field_margin">
                    <div class="form-group">
                      <label for="first_name">First Name *</label>
                      <input class="form-control" type="text" id="first_name" name="data[first_name]" placeholder="" value=""> 
                    </div>
                    <div class="first_name_error error" id="first_name_error" style="display: none;"><p>This field is required.</p></div>
                </div>
            </div> 
            <div class="row">
                <div class="col-sm-12 field_margin">
                    <div class="form-group">
                      <label for="last_name">Last Name *</label>
                      <input class="form-control" type="text" id="last_name" name="data[last_name]" placeholder="" value=""> 
                    </div>
                    <div class="last_name_error error" id="last_name_error" style="display: none;"><p>This field is required.</p></div>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-12 field_margin">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="dob">Date of birth *</label>
                            <input class="form-control" name="data[dob]" id="dob" type="date" placeholder="" data-date="" data-date-format="DD/MM/YYYY"value=""> 
                        </div>
                    </div>
                    <div class="dob_error error" id="dob_error" style="display: none;"><p>This field is required.</p></div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-12 field_margin">
                    <div class="form-group">
                        <div class="input-group">
                            <label>Current Company *</label>
                            <input class="form-control" type="text" placeholder="" id="company" value=""> 
                        </div>
                    </div>
                    <div class="company_error error" id="company_error" style="display: none;"><p>This field is required.</p></div>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-sm-12 field_margin">
                    <div class="form-group">
                        <div class="input-group">
                            <label>Select Your Work Experience *</label>
                            <select class="form-select" id="experience">
                                <option value=""></option>
                                <option value="1 > 3 Years">1 > 3 Years</option>
                                <option value="3 > 5 Years">3 > 5 Years</option>
                                <option value="5 > 7 Years">5 > 7 Years</option>
                                <option value="7 > 10 Years">7 > 10 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="experience_error error" id="experience_error" style="display: none;"><p>You have to select an option.</p></div>
                </div>
            </div> -->
            <div class="row"style="margin:0px 2px;">
                <label>Upload Your Resume *</label>
                 <fieldset class="upload_dropZone upload_resume text-center mb-3 p-4">
                    <p class="small my-2 upload_resume_label" id="upload_resume_label">Drop files here <i>or</i><br></p>
                    <div id= "uploaded_div" style="display:none;">
                        <button id="uploaded_div_btn" onclick="hide_preview_file();" type="submit" style="display:none; float: right;" class="close AClass">
                           <span>&times;</span>
                        </button>
                        <img width="200" src="Files/default/file-earmark-pdf.svg">
                    </div>
                    <input id="upload_resume" data-post-name="image_background" data-post-url="images/uploads/" class="position-absolute invisible" type="file" accept="image/jpeg, image/png, image/svg+xml,application/pdf,application/docx,application/doc" name="data[upload_resume]" />

                    <label class="btn btn-upload mb-3 upload_resume_label_btn" for="upload_resume">Browse files</label>                 
            
                  </fieldset>
                  <div class="resume_error error" id="resume_error" style="display: none;"></div>
            </div>
            <div class="row"style="margin:0px 2px;">
                <label>Upload Your Photo *</label>
                <fieldset class="upload_dropZone text-center mb-3 p-4">
                <p class="small my-2">Drop files here <i>or</i><br></p>
                <input id="upload_image" data-post-name="image_background" data-post-url="images/uploads/" class="position-absolute invisible" type="file" accept="image/jpeg, image/png, image/svg+xml" name="data[upload_image]" />

                <label class="btn btn-upload mb-3 " for="upload_image">Browse files</label>

                <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                </fieldset>
                <div class="image_error error" id="image_error" style="display: none;"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 field_margin">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="mobile">Mobile  Number *</label>
                            <input class="form-control" name="data[mobile]" id="mobile" type="text" placeholder="" value=""> 
                        </div>
                    </div>
                    <div class="mobile_error error" id="mobile_error" style="display: none;"><p>This field is required.</p></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 field_margin">
                    <div class="form-group">
                        <div class="input-group"> 
                            <label>Email *</label>
                            <input class="form-control" type="text" placeholder="" name="data[email]" id="email" value=""> 
                        </div>
                    </div>
                    <div class="email_error error" id="email_error" style="display: none;"><p>This field is required.</p></div>
                </div>
            </div>
            <input class="form-control" type="text" placeholder="" name="data[resume_url]" id="resume_url" value="" style="display:none;"> 
            <input class="form-control" type="text" placeholder="" name="data[image_url]" id="image_url" value="" style="display:none;"> 

            <div class="email_block">
                <!-- <h2 class="email_title">Enter your email</h2> -->
                <p>A verification code will be sent to the email address and mobile number you provide.</p>
            </div>
            <div class="row ml-1 mr-1" id="block_error">
                <div class="col-sm-12 field_margin validation_block" style="display: block;">
                    <p class="validation-message-text">One or more fields are not valid. Please, check errors and try again.</p>
                </div>
            </div>
           <button class="btn confirm-button">Send verification code</button>
        </div>
    </div>
</form>
</div>
<script type="text/javascript">
 var pdfjsLib = window['pdfjs-dist/build/pdf'];
// The workerSrc property shall be specified.
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

    var otp_html = "<div class=\"row\">"+
                        "<div class=\"col-xl-12 col-md-12\"><strong>Please Enter the OTP's sent to your registered mobile number and Email ID.</strong></div>"+
                        "<div class=\"col-xl-12 col-md-12\">&nbsp;</div>"+
                        "<div class=\"col-xl-6 col-md-6\">"+
                            "<label class=\"\" style=\"float: left;\"><b>Mobile OTP</b></label>"+
                            "<input type=\"text\" class=\"form-control\" name=\"data[mobile_otp]\" id=\"mobile_otp\" title=\"\" required pattern=\"[0-9]+\" min=\"6\" max=\"9\" maxlength=\"6\">"+
                            "<div class=\"mobile_otp_error error\" id=\"mobile_otp_error\" style=\"display: none;\"><p>Mobile OTP is incorrect.</p></div>"+
                        "</div>"+
                        "<div class=\"col-xl-6 col-md-6\">"+
                           "<label class=\"\" style=\"float: left;\"><b>Email OTP</b></label>"+
                            "<input type=\"text\" class=\"form-control\" name=\"data[email_otp]\" id=\"email_otp\" title=\"\" required pattern=\"[0-9]*\" min=\"6\" max=\"9\" maxlength=\"6\">"+
                            "<div class=\"email_otp_error error\" id=\"email_otp_error\" style=\"display: none;\"><p>Email OTP is incorrect.</p></div>"+
                        "</div>"+
                       "</div><hr>"+
                       "<div align=\"center\">"+              
                        "<button type=\"submit\" class=\"btn btn-default\" value=\"delete\" id=\"cancel_button\">CANCEL</button>&nbsp;&nbsp;"+
                        "<button type=\"submit\" class=\"btn btn-success\" value=\"delete\" id=\"submit_button\">Submit</button>&nbsp;&nbsp;"+
                        "</div>";
    
    document.getElementById('block_error').style.display = "none";
    var error_icon_img = "data:image/svg+xml,%3csvg width='20' height='20' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='10' cy='10' fill='%23eb5b57' r='10'/%3e%3cpath d='M10 16.733a1.873 1.873 0 1 0 0-3.746 1.873 1.873 0 0 0 0 3.746zm0-13.466a2.205 2.205 0 0 0-2.19 2.479l.786 4.311a1.414 1.414 0 0 0 2.808 0l.785-4.311a2.206 2.206 0 0 0-2.19-2.477Z' fill='white'/%3e%3c/svg%3e";
    function FormValidation(){
        var validation_flag = true;
        // var pattern =/^([0-9]{4})\/([0-9]{2})\/([0-9]{2})$/;
        var first_name = document.getElementById('first_name').value;
        var last_name  = document.getElementById('last_name').value;
        var mobile     = document.getElementById('mobile').value;
        var dob        = document.getElementById('dob').value;
        // var company    = document.getElementById('company').value;
        // var experience = document.getElementById('experience').value;
        var email = document.getElementById('email').value;
       
        //Name validation
        if (first_name == "") {
           document.getElementById('first_name').classList.add("form-control_error");
           document.getElementById('first_name_error').style.display = "block";
            validation_flag = false;
        }else{
            document.getElementById('first_name').classList.remove("form-control_error");
            document.getElementById('first_name_error').style.display = "none";
        }
        if (last_name == "") {
            document.getElementById('last_name').classList.add("form-control_error");
            document.getElementById('last_name_error').style.display = "block";
           validation_flag = false;
        }else{
            document.getElementById('last_name').classList.remove("form-control_error");
            document.getElementById('last_name_error').style.display = "none";
        }
        //email validation
        if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/) || email == "") {
            document.getElementById('email').classList.add("form-control_error");
            document.getElementById('email_error').style.display = "block";
           validation_flag = false;
        }else{
            document.getElementById('email').classList.remove("form-control_error");
            document.getElementById('email_error').style.display = "none";
        }
        //phone no validation
        if (!mobile.match(/^\(?([5-9]{1})\)?([0-9]{9})$/) || mobile == "") {
            document.getElementById('mobile').classList.add("form-control_error");
           document.getElementById('mobile_error').style.display = "block";
           validation_flag = false;
        }else{
            document.getElementById('mobile').classList.remove("form-control_dob_error");
            document.getElementById('mobile_error').style.display = "none";
        }
        //subject select box validation
        if (dob == "") {
            document.getElementById('dob_error').text = "";
            document.getElementById('dob').classList.add("form-control_dob_error");
            document.getElementById('dob_error').text = "This field is required.";
           document.getElementById('dob_error').style.display = "block";
           validation_flag = false;
        }
        else
        {
            document.getElementById('dob').classList.remove("form-control_error");
            document.getElementById('dob_error').style.display = "none";
        }
        // if (company == "") {
        //     document.getElementById('company').classList.add("form-control_error");
        //     document.getElementById('company_error').style.display = "block";
        //    validation_flag = false;
        // }else{
        //     document.getElementById('company').classList.remove("form-control_error");
        //     document.getElementById('company_error').style.display = "none";
        // }
        // if (experience == "") {
        //     document.getElementById('experience').classList.add("form-control_bg_error");
        //     document.getElementById('experience_error').style.display = "block";
        //    validation_flag = false;
        // }else{
        //     document.getElementById('experience').classList.remove("form-control_bg_error");
        //     document.getElementById('experience_error').style.display = "none";
        // }
        if(validation_flag == false)
        {
            document.getElementById('block_error').style.display = "block";
        }
        else
        {
            document.getElementById('block_error').style.display = "none";
        }

        if(validation_flag == true)
        {
            var resume_data = document.getElementById('upload_resume').files[0];
            var image_data  = document.getElementById('upload_image').files[0];
            var fd = new FormData();
            fd.append('first_name',first_name);
            fd.append('last_name',last_name);
            fd.append('mobile',mobile);
            fd.append('dob',dob);
            // fd.append('company',company);
            // fd.append('experience',experience);
            fd.append('email',email);
            fd.append('resume_data', resume_data);
            fd.append('image_data', image_data);
            $.ajax({
                url: 'send_otp.php',
                data: fd,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data){
                    var response = JSON.parse(data);
                    if(response.resume_status == 200 && response.image_status == 200)
                    {
                        Swal.fire({
                            title: "",
                            html: otp_html,
                            showCloseButton: false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            cancelButtonText:
                            '<i class="fa fa-thumbs-down"></i>',
                            cancelButtonAriaLabel: 'Thumbs down',
                            focusConfirm: false,
                            confirmButtonText:
                            'Submit',
                            confirmButtonAriaLabel: 'Submit',
                            allowOutsideClick: false
                           
                        }); 

                        /* OTP Validations:START */
                        var mobile_element = document.getElementById("mobile_otp");
                        var email_element  = document.getElementById("email_otp");

                        mobile_element.addEventListener("input", function(event) {
                          var inputValue = event.target.value;
                          var numericValue = inputValue.replace(/[^0-9]/g, "");
                          event.target.value = numericValue;
                        });

                        email_element.addEventListener("input", function(event) {
                          var inputValue = event.target.value;
                          var numericValue = inputValue.replace(/[^0-9]/g, "");
                          event.target.value = numericValue;
                        });
                        /* OTP Validations:END */

                        $("#submit_button").on("click", function(argument) {
                            $("#resume_error").css("display","none");
                            $("#image_error").css("display","none");
                            $("#mobile_otp_error").css("display","none");
                            $("#email_otp_error").css("display","none");
                            var first_name  = document.getElementById('first_name').value;
                            var last_name   = document.getElementById('last_name').value;
                            var mobile      = document.getElementById('mobile').value;
                            var dob         = document.getElementById('dob').value;
                            // var company     = document.getElementById('company').value;
                            // var experience  = document.getElementById('experience').value;
                            var email       = document.getElementById('email').value;
                            var mobile_otp  = document.getElementById('mobile_otp').value;
                            var email_otp   = document.getElementById('email_otp').value;
                            var resume_data = document.getElementById('upload_resume').files[0];
                            var image_data  = document.getElementById('upload_image').files[0];
                            var fd = new FormData();
                            fd.append('first_name',first_name);
                            fd.append('last_name',last_name);
                            fd.append('mobile',mobile);
                            fd.append('dob',dob);
                            // fd.append('company',company);
                            // fd.append('experience',experience);
                            fd.append('email',email);
                            fd.append('resume_data', resume_data);
                            fd.append('image_data', image_data);
                            fd.append('mobile_otp', mobile_otp);
                            fd.append('email_otp', email_otp);
                            $.ajax({
                                url: 'verify_otp.php',
                                data: fd,
                                processData: false,
                                contentType: false,
                                type: 'POST',
                                success: function(data){
                                var response = JSON.parse(data);
                                if(response.status == 200)
                                {
                                    Swal.close();
                                    document.getElementById("resume_url").value = response.resume_url;
                                    document.getElementById("image_url").value = response.image_url;
                                    var formdata =  new FormData(document.getElementById("freshers_form"));
                                    fetch('https://sheetdb.io/api/v1/9hwqysc0ueja5', {
                                      method : "POST",
                                      body: formdata,
                                    }).then(
                                      response => response.json()
                                    ).then((html) => {
                                       Swal.fire({
                                          icon: 'success',
                                          title: 'Registation is successfully done.',
                                          showConfirmButton: true,
                                          confirmButtonAriaLabel: 'Ok',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.reload();
                                            }
                                        });
                                    });
                                }
                                if(response.status == 403)
                                {
                                    $("#mobile_otp_error").css("display","block");
                                    $("#email_otp_error").css("display","block");
                                }
                                }
                            });
                        });
                        $("#cancel_button").on("click", function() {
                            window.location.reload();
                        });
                    }
                    else
                    {
                        if(response.resume_status == 203)
                        {
                            $("#resume_error").text(response.resume_message);
                            $("#resume_error").css("display","block");
                        }
                        if(response.image_status == 203)
                        {
                            $("#image_error").text(response.image_message);
                            $("#image_error").css("display","block");

                        }
                    } 
                }
            });
        }
    }
</script>
<script type="text/javascript">
   /* Bootstrap 5 JS included */

console.clear();
('use strict');


// Drag and drop - single or multiple image files
// https://www.smashingmagazine.com/2018/01/drag-drop-file-uploader-vanilla-js/
// https://codepen.io/joezimjs/pen/yPWQbd?editors=1000
(function () {

  'use strict';
  
  // Four objects of interest: drop zones, input elements, gallery elements, and the files.
  // dataRefs = {files: [image files], input: element ref, gallery: element ref}

  const preventDefaults = event => {
    event.preventDefault();
    event.stopPropagation();
  };

  const highlight = event =>
    event.target.classList.add('highlight');
  
  const unhighlight = event =>
    event.target.classList.remove('highlight');

  const getInputAndGalleryRefs = element => {
    const zone = element.closest('.upload_dropZone') || false;
    const gallery = zone.querySelector('.upload_gallery') || false;
    const input = zone.querySelector('input[type="file"]') || false;
    return {input: input, gallery: gallery};
  }

  const handleDrop = event => {
    const dataRefs = getInputAndGalleryRefs(event.target);
    dataRefs.files = event.dataTransfer.files;
    handleFiles(dataRefs);
  }


  const eventHandlers = zone => {

    const dataRefs = getInputAndGalleryRefs(zone);
    if (!dataRefs.input) return;

    // Prevent default drag behaviors
    ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, preventDefaults, false);
      document.body.addEventListener(event, preventDefaults, false);
    });

    // Highlighting drop area when item is dragged over it
    ;['dragenter', 'dragover'].forEach(event => {
      zone.addEventListener(event, highlight, false);
    });
    ;['dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, unhighlight, false);
    });

    // Handle dropped files
    zone.addEventListener('drop', handleDrop, false);

    // Handle browse selected files
    dataRefs.input.addEventListener('change', event => {
      dataRefs.files = event.target.files;
      handleFiles(dataRefs);
    }, false);

  }


  // Initialise ALL dropzones
  const dropZones = document.querySelectorAll('.upload_dropZone');
  for (const zone of dropZones) {
    eventHandlers(zone);
  }


  // No 'image/gif' or PDF or webp allowed here, but it's up to your use case.
  // Double checks the input "accept" attribute
  const isImageFile = file => 
    ['image/jpeg', 'image/png', 'image/svg+xml', 'application/pdf', 'application/msword'].includes(file.type);


  function previewFiles(dataRefs) {
    if(dataRefs.gallery == false)
    {
        $("#uploaded_div").css('display','block');
        $("#uploaded_div_btn").css('display','block');
        $(".upload_resume_label").css('display','none');
        $(".upload_resume_label_btn").css('display','none');
    }
    if (!dataRefs.gallery) return;
    for (const file of dataRefs.files) {
      let reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onloadend = function(e) {
        let img = document.createElement('img');
        img.className = 'upload_img mt-2';
        img.setAttribute('alt', file.name);
        img.src = reader.result;
        if(dataRefs.gallery.hasChildNodes())
        {
            dataRefs.gallery.removeChild(dataRefs.gallery.children[0]);
        }
        dataRefs.gallery.appendChild(img);
      }
    }
  }

  // Based on: https://flaviocopes.com/how-to-upload-files-fetch/
  const imageUpload = dataRefs => {

    // Multiple source routes, so double check validity
    if (!dataRefs.files || !dataRefs.input) return;

    const url = dataRefs.input.getAttribute('data-post-url');
    if (!url) return;

    const name = dataRefs.input.getAttribute('data-post-name');
    if (!name) return;

    const formData = new FormData();
    formData.append(name, dataRefs.files);
    const reader = new FileReader();
    reader.onload = function(event)
    {
        const base64String = event.target.result;
    }
  }


  // Handle both selected and dropped files
  const handleFiles = dataRefs => {

    let files = [...dataRefs.files];

    // Remove unaccepted file types
    files = files.filter(item => {
      if (!isImageFile(item)) {
        console.log('Not an image, ', item.type);
      }
      return isImageFile(item) ? item : null;
    });

    if (!files.length) return;
    dataRefs.files = files;

    previewFiles(dataRefs);
    // imageUpload(dataRefs);
  }

})();

function hide_preview_file()
{
    $("#uploaded_div").css('display','none');
    $("#uploaded_div_btn").css('display','none');
    $(".upload_resume_label").css('display','block');
    $(".upload_resume_label_btn").css('display','inline-block');
}

</script>
</body>
</html>

