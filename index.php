<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="XML, XSLT, PHP, HTML, CSS, JavaScript">
    <script type="text/javascript" src="utility/buttons/queryBtn.js"></script>
    <script type="text/javascript" src="utility/buttons/typeBtn.js"></script>
    <title>Twitter</title>
</head>
<body>
<form method="post" action="#">
    <table>
        <tr>
            <td>Path: </td>
            <td>
                <input type="text" name="path" value=""/>
            </td>
        </tr>
        <tr>
            <td>Argument: </td>
            <td>
                <input type="text" name="arg" value=""/>
            </td>
        </tr>
        <tr>
            <td>Query: </td>
            <td>
                <input type="text" name="query" value=""/>
            </td>
        </tr>
        <tr>
            <td>Types: </td>
            <td>
                <input type="text" name="type0" value=""/>
            </td>
            <td>
                <input type="text" name="type1" value=""/>
            </td>
            <td>
                <input type="text" name="type2" value=""/>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submitForm"></td>
        </tr>
    </table>
</form>

<h2>Response: </h2>

<?php 
    require_once("form/getRequest.php");

    if (isset($_POST["submitForm"])) {

        if(isset($_POST['path'])) {
            $path = $_POST['path'];
        } else {
            echo "Path is required!";
        }

        if(isset($_POST['path'])) {
            $arg = $_POST['arg'];
        } else {
            $arg = null;
        }
        
        if(isset($_POST['query'])) {
            $query = $_POST['query'];
        }

        if(isset($_POST['type0'])) {
            $type0 = $_POST['type0'];
        }

        if(isset($_POST['type1'])) {
            $type1 = $_POST['type1'];
        }

        if(isset($_POST['type2'])) {
            $type2 = $_POST['type2'];
        }

        $types = '';
        $params = '';

        if(isset($query) && ($type0 != ''|| $type1 != '' || $type2 != '')) {
            $types .= "$type0";

            if($type1 != '') {
                $types .= ",$type1";
                if($type2 != '') {
                    $types .= ",$type2";
                }
            } elseif ($type2 != '') {
                $types .= ",$type2";
            }

            $params = "?$query=$types";
        } elseif (($query == '' && $types != '') || ($query != '' && $types == '')) {
            echo "You need to provide both query and type!";
            $params = null;
        } else {
            $params = null;
        }

        $queryString = '';
    
        if($path && $arg && $params) {
            $queryString = "$path$arg$params";
        } elseif ($path && !isset($arg) && $params) {
            $queryString = "$path$params";
        } elseif ($path && $arg && !isset($params) ) {
            $queryString = "$path$arg";
        } elseif ($path && !isset($arg) && !isset($params) ) {
            $queryString = "$path";
        }
        echo "</br> Converted url:\t$queryString</br></br>";

        $json = getRequest($queryString);
        $xml = json2xml($json);

        $xmlLocation = 'form/response/xml/request.xsl';
        file_put_contents($xmlLocation, $xml);

       

   
    };

?>

<div>
<
<a href="form/response/xml/request.xsl">Final results</a><br>
    <img src="imgs/ASPv2.jpg">

</div>
</body>
</html>