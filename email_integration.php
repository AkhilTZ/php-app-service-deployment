<?php
require 'vendor/autoload.php';
use \Mailjet\Resources;

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

echo json_encode(['mobile'=> $mobil]);
?>