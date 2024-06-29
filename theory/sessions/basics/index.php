<?php
session_start();
$userName=$_SESSION["userName"]="Jaime";
$age=$_SESSION["age"]=24;
$city=$_SESSION["city"]="Matola";

//unset($_SESSION["age"]);
//session_unset();
session_destroy();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seções</title>
</head>
<body>
    <?php echo "Hello my name is ".$_SESSION["userName"]." , i have ". $_SESSION["age"] ." years old and i live in ".$_SESSION["city"] ?>
</body>
</html>