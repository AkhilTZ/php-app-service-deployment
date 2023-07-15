<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

session_start();
$resume_status  = 200;
$resume_message = '';
$image_status   = 200;
$image_message  = '';
if(isset($_FILES["resume_data"])) {
    $filename = basename($_FILES["resume_data"]["name"]);
    ## Location
    $location = "Files/resumes/".$filename;
    $extension = pathinfo($location,PATHINFO_EXTENSION);
    $extension = strtolower($extension);

    ## File upload allowed extensions
    $valid_extensions = array("jpg","jpeg","png","pdf","docx");

    
    ## Check file extension
    if(in_array(strtolower($extension), $valid_extensions)) {
      ## Upload file
        $file_url = __DIR__.'/'.$location; 
        if (file_exists($file_url)) {   
            $resume_status  = 203;
            $resume_message = 'File Already Exist. Upload another file.';
        }
    }
    else
    {
        $resume_status  = 203;
        $resume_message = 'Unsupported File Format: Please upload a valid resume file "JPG","JPEG","PNG","PDF","DOCX").';
    }
}

if(isset($_FILES["image_data"])) {
    $filename = basename($_FILES["image_data"]["name"]);
    ## Location
    $location = "Files/candidate_images/".$filename;
    $extension = pathinfo($location,PATHINFO_EXTENSION);
    $extension = strtolower($extension);

    ## File upload allowed extensions
    $valid_extensions = array("jpg","jpeg","png");

    ## Check file extension
    if(in_array(strtolower($extension), $valid_extensions)) {
      ## Upload file
        $file_url = __DIR__.'/'.$location; 
        if (file_exists($file_url)) {   
            $image_status  = 203;
            $image_message = 'File Already Exist. Upload another file.';
        }
    }
    else
    {
        $image_status  = 203;
        $image_message = 'Unsupported File Format: Please upload a valid resume file "JPG","JPEG","PNG").'.$extension;
    }
}
if($image_status == 200 && $resume_status == 200)
{
    $mobile_random_otp  = rand(100000,999999);
    $email_random_otp   = rand(100000,999999);
    $email_otp_status   = 203;
    $mobile_otp_status  = 203;

    $_SESSION[$_POST['first_name'].$_POST['last_name']] = $mobile_random_otp;
    $_SESSION[$_POST['email']]  = $email_random_otp;



    $account_sid = 'AC607f10b82915ae27d107368393651c31';
    $auth_token  = 'bfeab449bdb1429bfa6049a7c8502c48';
    // A Twilio number you own with SMS capabilities
    $twilio_number = "+15077020525";
    $mobile_no = strlen((string)$_POST['mobile']) == 12 ? $_POST['mobile'] : '+91'.$_POST['mobile'];
    $client = new Client($account_sid, $auth_token);
    $mobile_response = $client->messages->create(
        $mobile_no,
        array(
            'from' => $twilio_number,
            'body' => 'Your Techzenure verification code is '.$mobile_random_otp
        )
    );
    if(isset($mobile_response))
    {
        $mobile_otp_status = 200;
    }
    $body = [
        'Messages' => [
            [
            'From' => [
                'Email' => "no-reply@techzenure.com",
                'Name' => "TechZenure"
            ],
            'To' => [
                [
                    'Email' => $_POST['email'],
                    'Name' => "Balaji"
                ]
            ],
            'Subject' => "".$email_random_otp." is your verification code.",
            'HTMLPart' => "<p>Hello,</p>
    <p>Please use the verification code below :</p>
    <p><b>".$email_random_otp."</b></p>
    <p>If you didn't request this, you can ignore this email or let us know.</p>"
            ]
        ]
    ];
     
    $ch = curl_init();
     
    curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json')
    );
    curl_setopt($ch, CURLOPT_USERPWD, "94fc77772efdb8715bf118109b76a34e:a923f0d1ab6dc0a65ea159a0e6248635");
    $server_output = curl_exec($ch);
    curl_close ($ch);
     
    $response = json_decode($server_output);
    if (isset($response->Messages) && $response->Messages[0]->Status == 'success') 
    {
        $email_otp_status = 200;
    }
}

echo json_encode(['mobile'=>$mobile_otp_status, 'email' => $email_otp_status, 'resume_status' => $resume_status, 'resume_message' => $resume_message, 'image_status' => $image_status, 'image_message' => $image_message ]);

?>