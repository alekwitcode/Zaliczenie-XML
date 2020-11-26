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
    
<form action="pathPOST.php"> <!-- action="pathPOST.php" -->
<div class="form-wrapper">
    <div class="path-wrapper">
        <label for="path">Path: </label>
        <input type="text" class="path" name="path"><br>
    </div>
    <div class="argument-wrapper">
        <label for="argument">Argument: </label>
        <input type="text" class="argument" name="argument"><br><br>
    </div>
    <div class="query-wrapper" id="query-wrapper0">
        <label for="query">Query: </label>
        <input type="text" id="query0" class="query" name="query"><br><br>

        <div class="types-wrapper">
            <div class="type-wrapper">
                <label for="type">Type: </label>
                <input type="text" id="type0-0" class="type" name="type"><br><br>
            </div>
        </div>
        <button href="#" id="typeBtn0">Add Type</button>
    </div>
    
    <button href="#" id="queryBtn">Add Query</button>
</div>
<input type="submit" value="Submit">
</form>

<h2>Response: </h2>
    <?php 
        require_once('./endpoints/getRequest.php');
        echo getRequest('/2/tweets/search/','recent','query=python&max_results=10');
       # echo getRequest('/2/users/by/username/','TwitterDev');
    ?>
</body>
</html>