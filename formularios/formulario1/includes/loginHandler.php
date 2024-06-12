<?php
require_once "../controllers/userController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grabbing data from te form
    $userName = htmlspecialchars($_POST["userName"]);
    $userPassword = htmlspecialchars($_POST["userPassword"]);
    
    //Instantiate usercontroller
   $userController = new userController();
   $userController->verifyUser($userName, $userPassword);
} else {
    header("Location: ../views/login.php");
}

