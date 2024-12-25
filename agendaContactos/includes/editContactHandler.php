<?php
require_once "../controllers/contactController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Grabbing data from te form
    $userName = htmlspecialchars($_POST["nome"]);
    $phoneNumber = htmlspecialchars($_POST["telefone"]);
    $email = htmlspecialchars($_POST["email"]);

    //Session configuration
    include("sessionConfig.php");//Start the session
    $contactId= $_SESSION["contactId"];
    echo $contactId;

    
    //Instantiate usercontroller
   $contactController = new contactController();
   $contactController->updateContactData($userName, $phoneNumber,$email,$contactId);
} else {
    header("Location: ../views/viewContacts.php");
}

