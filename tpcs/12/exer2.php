<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Operações aritmeticas</title>
  <link rel="shortcut icon" href="images/html_favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/exer2.css" />

  <!--Code php-->
  <?php
  $display = "none";
  if (isset($_POST['submit'])) {
    $numberOne = $_POST["numberOne"];
    $numberTwo = $_POST["numberTwo"];
    $display = "block";
    function sum()
    {
      global $numberOne, $numberTwo;

      return $numberOne + $numberTwo;
    }

    function division()
    {
      global $numberOne, $numberTwo;
      try {
        if ($numberTwo != 0) {
          return $numberOne / $numberTwo;
        } else {
          echo "Indeterminado <br>";
        }
      } catch (Exception $e) {
        echo $e->getMessage();
      }

    }

    function subtraction()
    {
      global $numberOne, $numberTwo;
      return $numberOne - $numberTwo;
    }

    function multiplication()
    {
      global $numberOne, $numberTwo;
      return $numberOne * $numberTwo;
    }

    function module()
    {
      global $numberOne, $numberTwo;
      try {
        if ($numberTwo != 0) {
          return ($numberOne % $numberTwo);
        } else {
          echo "Indeterminado ";
        }
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }

    function average()
    {
      global $numberOne, $numberTwo;
      return ($numberOne + $numberTwo) / 2;
    }
  }
  ?>
</head>

<body>

  <form action="exer2.php" enctype="multipart/form-data" method="post">
    <h1>Digite dois números</h1>
    <div class="containerInput container">
      <input type="number" name="numberOne" id="numberOne" value="<?php echo $numberOne; ?>" class="input" />
      <input type="number" name="numberTwo" id="numberTwo" value="<?php echo $numberTwo; ?>" class="input" />
      <input type="submit" name="submit" value="Calcular" id="buttonCalculate" />
    </div>


    <fieldset id="fieldset" class="container" style="display:<?php echo $display ?>">
      <ul>
        <li>Soma: <?php echo sum(); ?></li>
        <li>Subtração: <?php echo subtraction(); ?></li>
        <li>Multiplicação: <?php echo multiplication(); ?></li>
        <li> Divisão: <?php echo division(); ?></li>
        <li>Resto da divisão: <?php echo module(); ?></li>
        <li>Média: <?php echo average(); ?></li>

      </ul>


    </fieldset>
  </form>
</body>


</html>