<?php
if(!empty($_POST)){
    $a =$_POST["username"];
    $b=$_POST["password"];
    echo ("Your user name is: ".$a." and password is: ".$b);}
session_start();
?>

<html>
<header>
    <script>
        function myFunc() {

            if((document.forms["testform"]["username"].value!=="dharam")||(document.forms["testform"]["password"].value!=="abc123")){
                document.getElementById("show").innerHTML = "Validation error";
                return false;
            }
            return true;
        }
    </script>
</header>
<body>

<form  action= "csfr.php"method="post" id="testform" onsubmit="return myFunc()">
    Name: <input id="un" type="text" name="username"><br>
    password: <input id="pw" type="text" name="password"><br>
    <input type="submit"value="Submit">
</form>
<?php

$_SESSION["confirmation"] = "session variables";

?>



<div id="show"></div>
</body>
</html>
