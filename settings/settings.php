<?php 
    require_once('config.php');
    require_once('TwitterAPIExchange.php');

    $settings = array(
        'oauth_access_token' => TWITTER_ACCESS_TOKEN,
        'oauth_access_token_secret' => TWITTER_ACCESS_SECRET,
        'consumer_key' => TWITTER_CONSUMER_KEY,
        'consumer_secret' => TWITTER_CONSUMER_SECRET,
    );
?>