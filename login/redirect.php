<?php
require_once 'conf.php';
 
// authenticate code from Google OAuth Flow 
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // get profile info 
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
 
  // now you can use this profile info to create account in your website and make user logged in. 
} 

//else {
  
    //$reedireccion = '"'.$client->createAuthUrl().'"';

    //header("Location: $reedireccion");

  //echo "
   // <a id='enlace' href='".$client->createAuthUrl()."'>Google Login</a>
   // <script>
   // var enlace = document.getElementById('enlace');
   // enlace.click();
   // </script>
   // ";
//}
?>