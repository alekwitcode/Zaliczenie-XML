<?php 
    require_once('./utility/arrayToXML.php');
    require_once('./utility/config.php');

    function getByUsername(String $username) {
        $bearerKey = TWITTER_BEARER_KEY;
        $ch = curl_init();
        $url = "https://api.twitter.com/2/users/by/username/${username}";
        $header[] = "Authorization: Bearer ${bearerKey}";

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($ch);

        if($e = curl_error($ch)) {
            echo "Curl error: ${e}";
        } else {
             $jsonArr = json_decode($resp, true);
             $convertedXML = array2xml($jsonArr);
             print_r($convertedXML);
        };

        curl_close($ch);
    }
?>