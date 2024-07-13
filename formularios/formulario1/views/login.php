<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto online</title>
  <link rel="stylesheet" href="styles/modal.css" media="all" />
  <link rel="stylesheet" href="styles/alert.css" media="all">
  <link rel="stylesheet" href="styles/login.css" media="all" />
  <link rel="stylesheet" href="styles/loginDesktop.css" media="screen and (min-width: 768px)" />

  <!--link dos icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />


</head>

<body>
  <?php include ("../includes/alert.php") ?>

  <form id="formSignup" class="flexColumn" onsubmit="return validateTheLogin()" action="../includes/loginHandler.php"
    method="post">

    <h1 class="title">Login</h1>

    <div class="containerInput">
      <label for="nome" class="label">Nome</label>
      <input type="text" name="nome" id="userName" class="input" />
    </div>

    <div class="containerInput">
      <label for="senha" class="label">Senha</label>
      <input type="password" name="senha" id="userPassword" class="input" />
      <i id="iconEye" class="bi bi-eye-fill svg" onclick="showPassword('userPassword')"></i>
    </div>

    <div class="containerInput">
      <p class="smallText">Ainda não tem uma conta? <a href="signup.php" class="link">Inscreva-se</a></p>
    </div>

    <!--Output section-->
    <div id="containerOutput" class="flexRow">
      <input type="submit" value="Login" id="buttonLogin" class="button buttonOrange"></input>
      <input value="Limpar" id="buttonClean" class="button buttonRed" onclick="cleanFields()"></input>
    </div>
  </form>

  <?php include ("modal.php"); ?>

</body>
<!--Javascript-->
<script src="javascript/login.js"></script>
<script src="javascript/validation.js"></script>

</html>