<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verificar o tipo de ano</title>
  <link rel="shortcut icon" href="images/html_favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/exer4.css" />

  <!--Code php-->
  <?php
  $year = "";
  $display="none";
  
  if (isset($_POST['submit'])) {
    $year = $_POST['year'];
    $display="block";
    function anoBissexto()
    {
      global $year;
      if ((($year % 4) == 0) && (($year % 100) != 0)) {
        return "O ano é Bissexto";
      } else {
       return "O ano não é Bissexto";
      }

    }

  }
  ?>
</head>

<body>

  <form action="exer4.php" enctype="multipart/form-data" method="post">
    <h1>Insira um ano</h1>
    <div class="containerInput container">
      <input type="number" name="year" id="year" value="<?php echo $year; ?>" class="input" />

      <input type="submit" name="submit" value="Verificar Ano" id="buttonShow" />
    </div>

  </form>

  <div class="container containerOutput" style="display:<?php echo $display ?>">
    <p class="year"> <?php echo anoBissexto(); ?></p>
  </div>

</body>


</html>