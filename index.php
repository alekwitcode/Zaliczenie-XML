<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="XML, XSLT, PHP, HTML, CSS, JavaScript">
    <script type="text/javascript" src="utility/buttons/queryBtn.js"></script>
    <script type="text/javascript" src="utility/buttons/typeBtn.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <!-- function for adding/removing rows:/ -->
    <script> 
    $(document).ready(function(e){

        // variables to avoid mess. They *have to be in one line* no matter how I much hate it

        var allRows =   '<p /><div>Path:<input type="text" class="path" name="path" id="childpath"><br> Argument: <input type="text" class="argument" name="argument" id="childargument"><br> Query:<input type="text" id="query0" class="query" name="query" id="childquery"><br>Type:<input type="text" id="type0-0" class="type" name="type" id="childtype"><a href="#" id="remove"><br> x </a></div>'

        //Adding rows to the form
        $("#add").click(function(e){
           $("#dynamicForm").append(allRows);

        //removing rows
        $("#dynamicForm").on('click','#remove',function(e) {
            $(this).parent('div').remove();
        });

        });
    });
</script>
    
        <form method="POST" action="utility/requests.php">
        <div id="dynamicForm">
            Path:<input type="text" class="path" name="path" id="path"><br>

            Argument: <input type="text" class="argument" name="argument" id="argument"> <br>


            Query:<input type="text" id="query0" class="query" name="query" id="query"><br>


            Type:<input type="text" id="type0-0" class="type" name="type" id="type"><br>


            <a href="#" id="add"> Add </a>

        </form>
    </div>

    </div>
</body>
</html>