<?php
require_once "../controllers/contactController.php";
require_once "../includes/sessionConfig.php";


if (!empty($_GET["id"])) {
    //Grabbing data from the url
    $contactId = htmlspecialchars($_GET["id"]);
   //Instantiate contactController
   $contactController = new contactController();
   $contactController->deleteContact($contactId);
} else {
   header("Location: ../views/viewContacts.php");
}

