<?php
session_start();

if (!isset($_SESSION["userName"]) and !isset($_SESSION["userPassword"])) {
    unset($_SESSION["userName"]);
    unset($_SESSION["userPassword"]);
    header("Location: ../views/home.php");
}

$userName = $_SESSION["userName"];
$userPassword = $_SESSION["userPassword"];


?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="styles/homeMobile.css" media="all">
    <link rel="stylesheet" href="styles/homeDesktop.css" media="screen and (min-width:768px)">
</head>

<body>
    <header>
        <a href="#" class="link">Contacto Online</a>
        <div id="containerButtons">
            <a href="../includes/logout.php"><button id="buttonLogout" class="button">Logout</button></a>
        </div>
    </header>

    <main id="main">
        <section id="text">
            <?php echo "<h1 class='userName title'>Bem vindo $userName </h1>"; ?>


        </section>

        <section id="containerImages">
            <img src="../views/images/girl_on_phone_mobile.jpg" alt="Girl on the phone" class="image">
            <img src="../views/images/human_on_phone_mobile.jpg" alt="Woman on the phone" class="image">

        </section>

    </main>


    <footer>
        <p class="paragraph">Copyright © 2024 Contactos online-All right reserveds</p>
    </footer>

</body>

</html>