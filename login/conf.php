<?php
require_once 'vendor/autoload.php';
 
// init configuration 
$clientID = '256112751198-j3belorgq0a04q5qeukcblp3n371r7q5.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/limesurvey/login/menu.php';
  
// create Client Request to access Google API 
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");