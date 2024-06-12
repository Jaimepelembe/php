<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tela de Signup</title>
  <link rel="stylesheet" href="styles/style.css" media="all" />
  <link rel="stylesheet" href="styles/computador.css" media="screen and (min-width: 768px)" />
  <!--link dos icones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!--Javascript-->
  <script src="javascript/tela_login.js"></script>

</head>

<body>
  <div id="box_tela_login">
    <form id="formSignup" action="../includes/signupHandler.php" method="post">
  
      <h2 class="title">Signup</h2>

      <div id="div_name" class="div_input">
        <label for="userName" class="label">Nome</label>
        <input type="text" name="userName" id="userName" class="input" required/>
      </div>

      <div id="div_senha" class="div_input">
        <label for="userPassword" class="label">Senha</label>
        <input type="password" name="userPassword" id="userPassword" class="input" required />
        <i id="icone_olho" class="bi bi-eye-fill" onclick="mostrarSenha()"></i>
      </div>

      <!--Output section-->
      <div id="div_output">
        <input type="submit" value="Signup" id="buttonSend" class="output" onclick="limparCampos()" />

        <input type="reset" value="Limpar" id="buttonReset" class="output" onclick="limparCampos()" />
      </div>
    </form>
  </div>
</body>

</html>