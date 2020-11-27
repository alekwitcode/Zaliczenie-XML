<?php 
    require_once('./utility/converters/arrayToXML.php');
    require_once('./utility/config.php');

    function getRequest(String $queryString) {
        $bearerKey = TWITTER_BEARER_KEY;
        $ch = curl_init();
        $finalUrl = "https://api.twitter.com$queryString";
        $header[] = "Authorization: Bearer ${bearerKey}";

        curl_setopt($ch, CURLOPT_URL, $finalUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($ch);

        if($e = curl_error($ch)) {
            echo "Curl error: ${e}";
        } else {
            return $resp;
        };
        curl_close($ch);
    }
?>