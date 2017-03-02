<?php
error_reporting(E_ERROR);
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require __DIR__ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'xxxxx';
$token = 'xxxxx';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+xxxxxxxxxx',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+xxxxxxxxxx',
        // the body of the text message you'd like to send
        'body' => "CDC is hosting awareness event on preventing plague. Please attend on Nov 20, 2016 at Mark Hall, St. Louis, MO"
    )
);

//rename("assets/js/main2.js","assets/js/main.js");
header('Location: calendar.html'); 

?>
