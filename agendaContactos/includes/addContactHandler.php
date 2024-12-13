<?php
require_once "../controllers/contactController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grabbing data from te form
    $userName = htmlspecialchars($_POST["nome"]);
    $phoneNumber = htmlspecialchars($_POST["telefone"]);
    $email = htmlspecialchars($_POST["email"]);
    //echo $userName;
    
    //Instantiate usercontroller
    $contactController = new contactController();
     $contactController->getContactData($userName, $phoneNumber,$email);

} else {
    header("Location: ../views/addContact.php");
}

