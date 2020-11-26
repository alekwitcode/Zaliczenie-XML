<?php 
    require_once('./utility/converters/arrayToXML.php');
    require_once('./utility/config.php');


    function getRequest(String $path, String $arg = '', String $params = '') {
        $bearerKey = TWITTER_BEARER_KEY;
        $ch = curl_init();
        if($path && $arg && $params) {
            $finalUrl = "https://api.twitter.com$path$arg?$params";
        } elseif ($path && $arg == '' && $params ) {
            $finalUrl = "https://api.twitter.com$path?$params";
        } elseif ($path && $arg && $params == '' ) {
            $finalUrl = "https://api.twitter.com$path$arg";
        } elseif ($path && $arg == '' && $params == '' ) {
            $finalUrl = "https://api.twitter.com$path";
        }
        #$finalUrl = "https://api.twitter.com/2/tweets/search/recent?query=python&max_results=10&tweet.fields=created_at,lang,conversation_id";
        $header[] = "Authorization: Bearer ${bearerKey}";

        curl_setopt($ch, CURLOPT_URL, $finalUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($ch);

        if($e = curl_error($ch)) {
            echo "Curl error: ${e}";
        } else {
            $convertedXML = json2xml($resp);
        };
        
        curl_close($ch);
        return $convertedXML;
    }
?>