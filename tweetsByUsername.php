<?php 
    require_once('settings/settings.php');

    $url = 'https://api.twitter.com/2/users/by/username/';
    $requestMethod = 'GET';
    $username = 'TwitterDev';
    $apiData = array(
        'username' => '?screen_name='+$username,
    );

    $twitter = new TwitterAPIExchange($settings);
    $twitter -> setGetfield($apiData);
    $response = $twitter -> per
?>