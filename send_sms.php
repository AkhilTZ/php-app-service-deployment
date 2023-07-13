<?php 
require 'vendor/autoload.php';
use Twilio\Rest\Client;

$sid = 'AC3602a132fbb73f4552cb8c093546f7d9';
$token = '124b56cd60dae5b28e0abd4a155c35a5';
$twilio = new Client($sid, $token);

$message = $twilio->messages->create(
    '+919347149304', // Phone number to send the SMS to
    [
        'from' => '+12345401518', // Your Twilio phone number
        'body' => 'This is a test SMS sent from Twilio.'
    ]
);

echo "SMS sent with message SID: " . $message->sid;

?>