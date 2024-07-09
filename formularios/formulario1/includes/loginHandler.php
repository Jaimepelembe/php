<?php
require_once "../controllers/userController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grabbing data from te form
    $userName = htmlspecialchars($_POST["nome"]);
    $userPassword = htmlspecialchars($_POST["senha"]);
    
    //Instantiate usercontroller
   $userController = new userController();
   $userController->verifyUser($userName, $userPassword);
} else {
    header("Location: ../views/login.php");
}

