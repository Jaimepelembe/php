<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto online</title>
  <link rel="stylesheet" href="styles/login.css" media="all" />
  <link rel="stylesheet" href="styles/loginDesktop.css" media="screen and (min-width: 768px)" />
  <!--link dos icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!--Javascript-->
  <script src="javascript/tela_login.js"></script>

</head>

<body>
    <form id="formSignup" class="flexColumn" action="../includes/loginHandler.php" method="post">
  
      <h2 class="title">Login</h2>
    
      <div  class="containerInput">
        <label for="userName" class="label">Nome</label>
        <input type="text" name="userName" id="userName" class="input" required/>
      </div>

      <div  class="containerInput">
        <label for="userPassword" class="label">Senha</label>
        <input type="password" name="userPassword" id="userPassword" class="input" required />
        <i id="icone_olho" class="bi bi-eye-fill" onclick="mostrarSenha()"></i>
      </div>

      <div class="containerInput">
      <p class="paragraph">Ainda não tem uma conta? <a href="signup.php" class="link">Inscreva-se</a></p>
      </div>

      <!--Output section-->
      <div id="containerOutput">
        <input type="submit" value="Login" id="buttonLogin" class="output" onclick="limparCampos()" />

        <input type="reset" value="Limpar" id="buttonReset" class="output" onclick="limparCampos()" />
      </div>
    </form>
</body>

</html>