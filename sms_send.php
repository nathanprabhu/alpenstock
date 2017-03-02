<?php
error_reporting(E_ERROR);
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC133beb918db59e93c2e840d53b223b23';
$token = '339b4a2c38b641953a167f295c5887b9';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+17739499557',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+18722216725',
        // the body of the text message you'd like to send
        'body' => "CDC is hosting awareness event on preventing plague. Please attend on Nov 20, 2016 at Mark Hall, St. Louis, MO"
    )
);

//rename("assets/js/main2.js","assets/js/main.js");
header('Location: calendar.html'); 

?>