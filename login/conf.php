<?php
require_once 'vendor/autoload.php';
 
// configuracion inicial
$clientID = '256112751198-j3belorgq0a04q5qeukcblp3n371r7q5.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/limesurvey/juan_diego/php/sesion_iniciada.php';
  
// creacion de la solicitud Client para acceder a Google API 
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");