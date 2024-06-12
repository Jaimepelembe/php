<?php 
if(isset($_POST["submit"])){
print_r($_POST["nome"]);
print_r($_POST["email"]);
print_r($_POST["telefone"]);
}
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela de login</title>

    <!--CSS-->
    <link
      rel="shortcut icon"
      href="images/html_favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../styles/style.css" media="all" />
    <link
      rel="stylesheet"
      href="../styles/computador.css"
      media="screen and (min-width:768px)"
    />

<!---Javascript-->
<script src="javascript.js"></script>

  </head>
 
 
  <body>
    <main>
      <form action="formulario.php" method="post" id="formulario">
        <fieldset>
          <legend id="legenda">Cadastro de clientes</legend>
          <div id="div_nome" class="div_input">
            <label for="idnome" id="label_nome" class="label label_entrada_dado"
              >Nome completo</label
            ><input
              type="text"
              required
              name="nome"
              id="idnome"
              class="entrada_dado"
            />
          </div>

          <div id="div_email" class="div_input">
            <label for="idemail" class="label label_entrada_dado">E-mail</label
            ><input
              type="email"
              required
              name="email"
              id="idemail"
              class="entrada_dado"
            />
          </div>

          <div id="div_telefone" class="div_input">
            <label for="idtelefone" class="label label_entrada_dado"
              >Telefone</label
            ><input
              type="number"
              required
              name="telefone"
              id="idtelefone"
              class="entrada_dado"
            />
          </div>

          <div id="div_sexo" class="div_input">
            <p id="paragrafo_sexo">Sexo:</p>
            <ul>
              <li>
                <input
                  type="radio"
                  required
                  name="genero"
                  id="idmasculino"
                  class="genero"
                  value="M"
                />
                <label
                  for="idmasculino"
                  id="label_masculino"
                  class="label_genero"
                  >Masculino</label
                >
              </li>

              <li>
                <input
                  type="radio"
                  required
                  name="genero"
                  id="idfeminino"
                  class="genero"
                  value="F"
                />
                <label for="idfeminino" id="label_feminino" class="label_genero"
                  >Feminino</label
                >
              </li>
            </ul>
          </div>

          <div id="div_data_nascimento" class="div_input">
            <label
              for="iddata_nascimento"
              id="label_data_nascimento"
              class="label"
              >Data de Nascimento:</label
            ><input
              type="date"
              required
              name="data_nascimento"
              id="iddata_nascimento"
            />
          </div>

          <div id="div_provincia" class="div_input">
            <label for="idprovincia" class="label label_entrada_dado"
              >Provincia</label
            ><input
              type="text"
              required
              name="provincia"
              id="idprovincia"
              class="entrada_dado"
            />
          </div>

          <div id="div_cidade" class="div_input">
            <label for="idcidade" class="label label_entrada_dado">Cidade</label
            ><input
              type="text"
              required
              name="cidade"
              id="idcidade"
              class="entrada_dado"
            />
          </div>

          <div id="div_bairro" class="div_input">
            <label for="idbairro" class="label label_entrada_dado">Bairro</label
            ><input
              type="text"
              required
              name="bairro"
              id="idbairro"
              class="entrada_dado"
            />
          </div>

          <div id="div_saida_dados">
            <input
              type="submit"
              value="Enviar"
              id="botao_enviar"
              class="saida_dados"
            />
            <input
              type="reset"
              value="limpar"
              id="botao_limpar"
              class="saida_dados"
            />
          </div>
        </fieldset>
      </form>
    </main>
  </body>

</html>
