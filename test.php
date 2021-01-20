<?php
session_start();
require_once 'vendor/autoload.php';

$id_token = filter_input(INPUT_POST, 'id_token');
define('CLIENT_ID', '536759493090-7q0p3uikn8ju2tb3uek6qmbvcko8vm47.apps.googleusercontent.com');

$client = new Google_Client(['client_id' => CLIENT_ID]); 
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    $userid = $payload['sub'];
}

//DBなどとのやりとりする

$_SESSION['login'] = true;
exit;
?>
