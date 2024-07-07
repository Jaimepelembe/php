<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto online</title>
  <link rel="stylesheet" href="styles/modal.css" media="all" />
  <link rel="stylesheet" href="styles/login.css" media="all" />
  <link rel="stylesheet" href="styles/loginDesktop.css" media="screen and (min-width: 768px)" />

  <!--link dos icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!--Javascript-->
  <script src="javascript/tela_login.js"></script>
  <script src="javascript/validation.js"></script>

</head>

<body>
  <form id="formSignup" class="flexColumn" action="../includes/loginHandler.php" method="post">

    <h1 class="title">Login</h1>

    <div class="containerInput">
      <label for="nome" class="label">Nome</label>
      <input type="text" name="nome" id="userName" class="input"/>
    </div>

    <div class="containerInput">
      <label for="senha" class="label">Senha</label>
      <input type="password" name="senha" id="userPassword" class="input" />
      <i id="icone_olho" class="bi bi-eye-fill" onclick="mostrarSenha()"></i>
    </div>

    <div class="containerInput">
      <p class="smallText">Ainda não tem uma conta? <a href="signup.php" class="link">Inscreva-se</a></p>
    </div>

    <!--Output section-->
    <div id="containerOutput" class="flexRow">
      <input type="submit" value="Login" id="buttonLogin" class="button buttonOrange"  />

      <input type="reset" value="Limpar" id="buttonReset" class="button buttonRed" onclick="validateTextField('userName')" />
    </div>
  </form>

<?php include("modal.php");?>

</body>

</html>