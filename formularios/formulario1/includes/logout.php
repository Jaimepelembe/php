<?php
session_start();
unset($_SESSION["userName"]);
unset($_SESSION["userPassword"]);
header("Location: ../views/home.php");

