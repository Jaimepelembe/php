<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Províncias e capitais</title>
  <link rel="shortcut icon" href="images/html_favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/exer3.css" />

  <!--Code php-->
  <?php
  $province="";
  $provinceSelected="MP";

  if (isset($_POST['submit'])) {
    $provinceAndCapital["MP"] = "Matola";
    $provinceAndCapital["MC"] = "Maputo";
    $provinceAndCapital["IN"] = "Inhambane";
    $provinceAndCapital["GZ"] = "Xai-Xai";
    $provinceAndCapital["MN"] = "Chimoio";
    $provinceAndCapital["SF"] = "Beira";
    $provinceAndCapital["ZB"] = "Quelimane";
    $provinceAndCapital["TT"] = "Tete";
    $provinceAndCapital["NP"] = "Nampula";
    $provinceAndCapital["NS"] = "Lichinga";
    $provinceAndCapital["CD"] = "Pemba";

    $provinceSelected = $_POST["province"];
    $province = "A capital é ".$provinceAndCapital[$provinceSelected];

  }
  ?>


</head>

<body>

  <form action="exer3.php" enctype="multipart/form-data" method="post">
    <h1>Selecione uma província</h1>
    <div class="containerInput container">
      <select name="province" id="province" class="input" value="<?php echo $provinceSelected ?>">
        <option value="MP">Maputo Provincia</option>
        <option value="MC">Maputo Cidade</option>
        <option value="IN">Inhambane</option>
        <option value="GZ">Gaza</option>
        <option value="MN">Manica</option>
        <option value="SF">Sofala</option>
        <option value="ZB">Zambézia</option>
        <option value="TT">Tete</option>
        <option value="NP">Nampula</option>
        <option value="NS">Niassa</option>
        <option value="CD">Cabo Delgado</option>
      </select>

      <input type="submit" name="submit" value="Mostrar capital" id="buttonShow" />
    </div>

  </form>

  <div class="container containerProvince">
    <p class="province"> <?php echo $province; ?></p>
  </div>

</body>


</html>