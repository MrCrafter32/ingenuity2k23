<?php

$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uni = $_POST['uni'];
$city = $_POST['city'];
$person = $_POST['n-tickets'];
$type = $_POST['type'];

$competition = $_POST['event'];
$poc1_name = $_POST['poc1_name'];
$poc1_email = $_POST['poc1_email'];
$poc1_phone = $_POST['poc1_phone'];
$poc2_name = $_POST['poc2_name'];
$poc2_email = $_POST['poc2_email'];
$poc2_phone = $_POST['poc2_phone'];
$participants = $_POST['n-participants'];
$team_members = $_POST['team_members'];

require_once 'vendor/autoload.php';
//require `/credentials.json`;
putenv('GOOGLE_APPLICATION_CREDENTIALS=credentials.json');

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1nNc4ZjXWUWqehlFaDWJGHF1Y76Yzf2wkPJQkY6UBf_E';
$range = 'Sheet1';

$data = [
  [$fname, $lname, $email, $phone, $uni, $city, $person, $type, $competition, $poc1_name, $poc1_email, $poc1_phno, $poc2_name, $poc2_email, $poc2_phno, $team_members]
];

$requestBody = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $requestBody, $params);

if ($result) {
    header("Location:https://www.ingenuityfest.in");
    echo '<script>alert("Response Recorded Succesfully!. Confirmation will be given via mail in 24 hrs.")</script>';
    //echo 'Data saved to Google Sheets!';
} else {
    echo 'Error saving data to Google Sheets.';
}
