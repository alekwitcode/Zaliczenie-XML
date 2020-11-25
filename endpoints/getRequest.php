<?php 
    require_once('./utility/arrayToXML.php');
    require_once('./utility/config.php');

    function getRequest(String $endpoint, String $path, array $params = null) {
        $bearerKey = TWITTER_BEARER_KEY;
        $ch = curl_init();

        if($endpoint && $path && isset($params)) {
            $queryString = http_build_query($params);
            $finalUrl = "https://api.twitter.com$endpoint$path?$queryString";
        } elseif ($endpoint && $path && !isset($params)) {
            $finalUrl = "https://api.twitter.com$endpoint$path";
        } elseif ($endpoint && !isset($path) && $params) {
            $queryString = http_build_query($params);
            $finalUrl = "https://api.twitter.com$endpoint?$queryString";
        } elseif ($endpoint && !isset($path) && !isset($params)) {
            $finalUrl = "https://api.twitter.com$endpoint";
        }

        $header[] = "Authorization: Bearer ${bearerKey}";

        curl_setopt($ch, CURLOPT_URL, $finalUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($ch);

        if($e = curl_error($ch)) {
            echo "Curl error: ${e}";
        } else {
            $convertedXML = json2xml($resp);
            print_r($convertedXML);
        };

        curl_close($ch);
    }
?>