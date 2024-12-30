<?php
require_once "../controllers/contactController.php";
require_once "../includes/sessionConfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["userId"] &&!empty($_POST["searchBox"])) {
    //Grabbing data from te form
    $contactName = htmlspecialchars($_POST["searchBox"]);
    $id=$_SESSION["userId"];
    
    //Instantiate usercontroller
    $contactController = new contactController();
    $contactController->searchContact($contactName, $id);

} else {
    header("Location: ../views/viewContacts.php");
}

