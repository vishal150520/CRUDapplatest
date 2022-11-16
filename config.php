<?php

//start session on web page
session_start();

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('975636605434-qgsb85b3mkodmri64s6972q2tjijd258.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Crud/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 