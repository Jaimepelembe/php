<?php
require_once "../controllers/contactController.php";
require_once "../includes/sessionConfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["userId"]) {
    //Grabbing data from te form
    $contactName = htmlspecialchars($_POST["searchBox"]);
    $id=$_SESSION["userId"];
    // echo $contactName;
    // echo $id;
    
    //Instantiate usercontroller
    $contactController = new contactController();
    $contactController->searchContact($contactName, $id);

} else {
    //header("Location: ../views/viewContacts.php");
}

