<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
$google_redirect_url = 'test.php';
//start session
session_start();
//include google api files
echo ' <link rel="stylesheet"type="text/css" href="mystyle.css"/>';
include_once 'vendor/autoload.php';
// New Google client
$gClient = new Google_Client();
$gClient->setApplicationName('ApplicationName');
$gClient->setAuthConfigFile('client_secrets.json');
$gClient->addScope(Google_Service_Oauth2::USERINFO_PROFILE);
$gClient->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
// New Google Service
$google_oauthV2 = new Google_Service_Oauth2($gClient);
// LOGOUT?
// GOOGLE CALLBACK?
if (isset($_GET['code']))
{
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
    return;
}
// PAGE RELOAD?
if (isset($_SESSION['token']))
{
    $gClient->setAccessToken($_SESSION['token']);
}
// Autologin?
if(isset($_GET["auto"]))
{
    $_SESSION['auto'] = $_GET["auto"];
}
// LOGGED IN?
if ($gClient->getAccessToken()) // Sign in
{
    //For logged in user, get details from google using access token
    try {
        $user = $google_oauthV2->userinfo->get();

    $_SESSION['email'] = $user['email'];
    $_SESSION['gender'] = $user['gender'];
     $_SESSION['link'] = $user['link'];
    $_SESSION['picture'] = $user['picture'];
    $_SESSION['familyName'] = $user['familyName'];
    $_SESSION['givenName'] = $user['givenName'];

    header("location:home.php");


    } catch (Exception $e) {
        // The user revoke the permission for this App! Therefore reset session token
        unset($_SESSION["auto"]);
        unset($_SESSION['token']);
        header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
    }
}
else // Sign up
{
    //For Guest user, get google login url
    $authUrl = $gClient->createAuthUrl();
    $auth_url = $gClient->createAuthUrl();
    // Fast access or manual login button?
    if(isset($_GET["auto"]))
    {

        header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    }
    else
    {
        echo "<div class='log'>";
        echo "<div class='log1'>";
        echo '<img src="logo1.png" class="logo" alt="logo">';
        echo '<b class="name">MeTube</b>';
        echo "</div>";
        echo "<a href='$auth_url'> <button>Login with Google</button> </a>";
        echo "</div>";
 }

}

?>
