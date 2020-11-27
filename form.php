<?php 

    $q=0;
    $t=0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
     
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    return $data;
?>

<form>
    Path: </input type="text" name="path" value="path">

    Argument: </input type="text" name="arg" value="arg">

    Query: </input type="text" name="website" value="query$q$t">

    Type: </input type="text" name="type" value="$type<?php ?>">
</form>

<form method = "post" action = "/php/php_form_introduction.htm">
         <table>
            <tr>
               <td>Name:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>E-mail:</td>
               <td><input type = "text" name = "email"></td>
            </tr>
            
            <tr>
               <td>Specific Time:</td>
               <td><input type = "text" name = "website"></td>
            </tr>
            
            <tr>
               <td>Class details:</td>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>
      


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