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

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="shortcut icon" href="images/telephonered.png" type="image/x-icon">

<!--Style CSS-->
    <link rel="stylesheet" href="styles/main.css" media="all">
</head>

<body>

<?php include("header.php"); ?>
    
    <main id="main" tabindex="0" onclick="closeSideBar()">
        <section id="containerImage" class="flexRow">
            <img src="../views/images/thelephone.jpg" alt="Thelephone" class="image">
        </section>
    </main>

    <?php include ("footer.php") ?>

</body>

<!--The navigator first carry the information on the header and then process the body content-->
<!--Javascript-->
<script src="javascript/header.js"></script>
</html>