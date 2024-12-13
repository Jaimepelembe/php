<?php
//Configure a new session
require_once "../includes/sessionConfig.php";

if (!isset($_SESSION["userName"]) and !isset($_SESSION["userPassword"])) {

    unset($_SESSION["userId"]);
    unset($_SESSION["userName"]);
    //unset($_SESSION["userPassword"]);
    session_unset();
    header("Location: ../views/index.php");
}

$userName = $_SESSION["userName"];
//$userPassword = $_SESSION["userPassword"];


?>