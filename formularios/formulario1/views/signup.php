<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tela de Signup</title>

<!--Style CSS-->
  <link rel="stylesheet" href="styles/modal.css" media="all" />
  <link rel="stylesheet" href="styles/login.css" media="all" />
  <link rel="stylesheet" href="styles/loginDesktop.css" media="screen and (min-width: 768px)" />

  <!--link dos icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />


</head>

<body>
    <form id="formSignup" class="flexColumn" onsubmit="return validateTheLogin()" action="../includes/signupHandler.php"  method="post">
  
      <h1 class="title">Signup</h1>


      <!--Input section-->
      <div  class="containerInput">
        <label for="nome" class="label">Nome</label>
        <input type="text" name="nome" id="userName" class="input"/>
      </div>

      <div  class="containerInput">
        <label for="senha" class="label">Senha</label>
        <input type="password" name="senha" id="userPassword" class="input"/>
        <i id="iconEye" class="bi bi-eye-fill svg" onclick="showPassword('userPassword')"></i>
      </div>

      <!--Output section-->
      <div id="containerOutput" class="flexRow">
        <input type="submit" value="Signup" id="buttonSend" class="button buttonOrange"/>
        <input value="Limpar" id="buttonReset" class="button buttonRed" onclick="cleanFields()" />
      </div>
    </form>
    <?php include ("modal.php"); ?>
</body>
  <!--Javascript-->
  <script src="javascript/login.js"></script>
  <script src="javascript/validation.js"></script>
</html>