<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

require 'vendor/autoload.php';
use Twilio\Rest\Client;

require 'vendor/autoload.php';
use \Mailjet\Resources;


$sid = 'AC3602a132fbb73f4552cb8c093546f7d9';
$token = '124b56cd60dae5b28e0abd4a155c35a5';
$twilio = new Client($sid, $token);

session_start();

$_SESSION[$_POST['first_name'].$_POST['last_name']] = rand(100000,999999);
$_SESSION[$_POST['email']]  = rand(100000,999999);


$message = $twilio->messages->create(
    '+919347149304', // Phone number to send the SMS to
    [
        'from' => '+12345401518', // Your Twilio phone number
        'body' => 'This is a test SMS sent from Twilio.'
    ]
);

$mobile_otp_status = $message->sid;


$mailjet = new \Mailjet\Client('94fc77772efdb8715bf118109b76a34e', 'abe3fc178ef17a4e00a212ee68bab878', true, ['version' => 'v3.1']);

$data = [
    'Messages' => [
        [
            'From' => [
                'Email' => 'no-reply@techzenure.com',
                'Name' => 'Techzenure'
            ],
            'To' => [
                [
                    'Email' => 'balajigenji2000@gmail.com',
                    'Name' => 'Balaji'
                ]
            ],
            'Subject' => 'Test Email',
            'TextPart' => 'This is a test email sent from Mailjet.'
        ]
    ]
];

$response = $mailjet->post(Resources::$Email, ['body' => $data]);
if ($response->success()) {
    $email_otp_status = 200;
} else {
   $email_otp_status  = 204;
}

echo json_encode(['mobile'=>$mobile_otp_status, 'email' => $email_otp_status]);

?>