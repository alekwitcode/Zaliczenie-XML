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
    
<form action="converters/outputToArray.php" method="POST">
<div class="form-wrapper">
    <div class="path-wrapper">
        <label for="path">Path: </label>
        <input type="text" class="path" name="path"><br>
    </div>
    <div class="argument-wrapper">
        <label for="argument">Argument: </label>
        <input type="text" class="argument" name="argument"><br><br>
    </div>
    <div id="queries-wrapper">
        <div class="query-wrapper" id="query-wrapper0">
            <label for="query0">Query: </label>
            <input type="text" id="query0" class="query" name="query0"><br><br>

            <div class="types-wrapper">
                <div class="type-wrapper">
                    <label for="type">Type: </label>
                    <input type="text" id="type0-0" class="type" name="type"><br><br>
                </div>
            </div>
            <button href="#" id="typeBtn0" >Add Type</button>
                                        <!--onclick="typeBtn(0,0)"-->
        </div>
    </div>
    
    <button href="#" id="queryBtn" >Add Query</button>
                                    <!--onclick="queryBtn(0,0)"-->
</div>
<input type="submit" value="Submit">
</form>
<div>
    <img src="imgs/ASPv2.jpg">
</div>

<h2>Response: </h2>
    <?php 
        require_once('./endpoints/getRequest.php');
        $xml = getRequest('/2/tweets/search/','recent','query=python&max_results=10');
        $xmlLocation = 'xml/request.xml';
        $target = file_put_contents($xmlLocation, $xml);


        include 'xml/request.xml';


        // $xmlFile = new DOMDocument('1.0');
        // $xmlFile->preserveWhiteSpace = false;
        // $xmlFile->formatOutput = true;
        // $xmlFile->loadXML($xml->asXML());
        // $xmlFile->save('/xml/request.xml');
    ?>
</body>
</html>