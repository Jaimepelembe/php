<?php
require_once "../controllers/contactController.php";

if (!empty($_GET["id"])) {
    //Grabbing data from the url
    $contactId = htmlspecialchars($_GET["id"]);
    //Instantiate usercontroller
   $contactController = new contactController();
   $contactController->deleteContact($contactId);
} else {
    header("Location: ../views/viewContacts.php");
}

