<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto online</title>
    <link rel="shortcut icon" href="images/telephonered.png" type="image/x-icon">

    <!--Style CSS-->
    <link rel="stylesheet" href="styles/modal.css" media="all">
    <link rel="stylesheet" href="styles/alert.css" media="all">
    <link rel="stylesheet" href="styles/login.css" media="all">
    <link rel="stylesheet" href="styles/header.css" media="all">
    <link rel="stylesheet" href="styles/addContact.css" media="all">
    <link rel="stylesheet" href="styles/personalData.css" media="all">

</head>

<body>
    <?php include ("header.php"); ?>
    <!--The alert and modal-->
    <?php include ("../includes/alert.php") ?>
    <?php include ("modal.php") ?>

    <h1 id="titlePersonalData" class="title">Dados pessoais</h1>
    <!--**********Form to update the username**********-->
    <form id="formUpdateName" class="form flexColumn" onsubmit="return validateTextFieldSize('userName',2,40)"
        action="../includes/addContactHandler.php" method="post" tabindex="0" onclick="closeSideBar()">
        <h1 id="titleUpdateName" class="title subtitle">Actualizar nome</h1>
        <!--Input section-->
        <div class="containerInput">
            <label for="nome" class="label">Nome</label>
            <input type="text" name="nome" id="userName" class="input" />

        </div>
        <!--Output section-->
        <div id="containerOutput" class="flexRow">
            <input type="submit" id="buttonUpdate" class="button buttonOrange" value="Actualizar"></input>
            <input id="buttonClean" class="button buttonRed" value="Limpar"
                onclick="cleanTextField('userName')"></input>
        </div>
    </form>

    <!--**********Form to update the password**********-->
    <form id="formSignup" class="form flexColumn" onsubmit="return validateTheLogin()" action="../includes/signupHandler.php"
        method="post">

        <h1 class="title">Alterar senha</h1>
        <!--Input section-->
        <div class="containerInput">
            <label for="senha actual" class="label">Senha actual</label>
            <input type="password" name="senha actual" id="currentUserPassword" class="input inputPassword" />
            <i id="iconEye" class="bi bi-eye-fill svg" onclick="showPassword('currentUserPassword')"></i>
        </div>

        <div class="containerInput">
            <label for="nova senha" class="label">Senha nova</label>
            <input type="password" name="nova senha" id="newUserPassword" class="input inputPassword" />
            <i id="iconEye" class="bi bi-eye-fill svg" onclick="showPassword('newUserPassword')"></i>
        </div>

        <div class="containerInput">
            <label for="confirmar senha" class="label">Confirmar Senha</label>
            <input type="password" name="confirmar senha" id="confirmUserPassword" class="input inputPassword" />
            <i id="iconEye" class="bi bi-eye-fill svg" onclick="showPassword('confirmUserPassword')"></i>
        </div>

        <!--Output section-->
        <div id="containerOutput" class="flexRow">
            <input type="submit" value="Salvar" id="buttonSend" class="button buttonOrange" />
            <input value="Limpar" id="buttonReset" class="button buttonRed" onclick="cleanFieldsByClassName('inputPassword')" />
        </div>
    </form>

    <!--The footer of the page-->
    <?php include ("footer.php") ?>


</body>
<!--Javascript-->
<script src="javascript/header.js"></script>
<script src="javascript/login.js"></script>
<script src="javascript/validation.js"></script>
<script src="javascript/personalData.js"></script>

</html>