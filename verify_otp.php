<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

session_start();
$mobile_otp_verify = false;
$email_otp_verify = false;
$result_array = array();
if($_SESSION[$_POST['first_name'].$_POST['last_name']] == $_POST['mobile_otp'])
{
	unset($_SESSION[$_POST['first_name'].$_POST['last_name']]);
	$mobile_otp_verify = true;
}
if($_SESSION[$_POST['email']] == $_POST['email_otp'])
{
	unset($_SESSION[$_POST['email']]);
	$email_otp_verify = true;
}

// remove all session variables
session_unset();
// destroy the session
session_destroy();

if($mobile_otp_verify == false)
{
	$result_array['status'] 	=	403;  
	$result_array['message'] 	= 	"Mobile OTP is incorrect";  
}
if($email_otp_verify == false)
{
	$result_array['status'] 		=	403;  
	$result_array['email_message'] 	= 	"Email OTP is incorrect";  
}
if($mobile_otp_verify == true && $email_otp_verify == true)
{
	session_unset();
	$result_array['status'] 	=	200;
	$result_array['message'] 	=	"Thank you!";
}

// Check if image file is a actual image or fake image
if(isset($_FILES["resume_data"])) {
	$filename = basename($_FILES["resume_data"]["name"]);
	## Location
	$location = "Files/resumes/".$filename;
	$extension = pathinfo($location,PATHINFO_EXTENSION);
	$extension = strtolower($extension);

	## File upload allowed extensions
	$valid_extensions = array("jpg","jpeg","png","pdf","docx");

	$response = 0;
	## Check file extension
	if(in_array(strtolower($extension), $valid_extensions)) {
	  ## Upload file
	  if(move_uploaded_file($_FILES['resume_data']['tmp_name'],$location)){
	  	$result_array['resume_url'] = __DIR__.'/'.$location; 
	  }
	}
}
if(isset($_FILES["image_data"])) {
	$filename = basename($_FILES["image_data"]["name"]);
	
	## Location
	$location = "Files/candidate_images/".$filename;

	$extension = pathinfo($location,PATHINFO_EXTENSION);
	$extension = strtolower($extension);

	## File upload allowed extensions
	$valid_extensions = array("jpg","jpeg","png","pdf","docx");

	$response = 0;
	## Check file extension
	if(in_array(strtolower($extension), $valid_extensions)) {
	  ## Upload file
	  if(move_uploaded_file($_FILES['image_data']['tmp_name'],$location)){
	  		$result_array['image_url'] = __DIR__.'/'.$location; 
	  }
	}
}
echo json_encode($result_array);
?>