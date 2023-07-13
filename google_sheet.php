<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig('gauth/credentials.json'); // Path to the JSON credentials file downloaded from GCP
$client->addScope(Google_Service_Sheets::SPREADSHEETS);
$service = new Google_Service_Sheets($client);
$spreadsheetId = '1hkCEpWDPMrMZ9wV8UKmvYWQvSBpOhP0HhydU9hbwmSg'; // Replace with the ID of your Google Sheets spreadsheet
$range = 'Main'; // Replace with the range of cells you want to read
$values = [
    ['', 'test', 'test 2','test4','test4','test 5','test6','test7','test8'],
    // Add more rows as needed
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->update($spreadsheetId, $range, $body, $params);
?>