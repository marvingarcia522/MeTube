<?php

    require_once"index.php";
    unset($_SESSION['token']);
    $gClient->revokeToken();

    //Forced Hard Log off from google - then redirect to your page
    $google_redirect_url ='https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=index.php';
    header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL)); //redirect user back to page
    
?>
