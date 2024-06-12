<?php
require_once "../controllers/userController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grabbing data from te form
    $userName = htmlspecialchars($_POST["userName"]);
    $userPassword = htmlspecialchars($_POST["userPassword"]);
    //Instantiate usercontroller
    $userController = new userController();
    $userController->getUserData($userName, $userPassword);

    //$phoneNumber = htmlspecialchars($_POST["phoneNumber"]);
    // $email = htmlspecialchars($_POST["email"]);
} else {
    header("Location: ../views/signup.php");
}

