<?php
session_start();

// Include Librari Google Client (API)
include_once '../libraries/google-client/Google_Client.php';
include_once '../libraries/google-client/contrib/Google_Oauth2Service.php';

$client_id = '376225809618-b1vh7bvamqnt98bi8t8mm2f740rdmoc6.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'http://localhost/Paradise_Cake_House_php/auth/login.php'; // Callback URL

// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('Google Login'); // Set dengan Nama Aplikasi Kalian
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login

$google_oauthv2 = new Google_Oauth2Service($gclient);
?>