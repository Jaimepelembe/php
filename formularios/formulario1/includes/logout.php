<?php
//Configure a new session
require_once "../includes/sessionConfig.php";

unset($_SESSION["userName"]);
unset($_SESSION["userPassword"]);
header("Location: ../views/home.php");

