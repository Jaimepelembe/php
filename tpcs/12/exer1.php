<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Números pares</title>
    <link rel="shortcut icon" href="images/html_favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css" media="all">
    <link rel="stylesheet" href="styles/exer1.css" media="all" />

    <!--code php-->
    <?php
    $output = "";
    $minNumber = 200;
    $maxNumber = 300;

    if (isset($_POST['submit'])) {//Verify if the submit button was pressed
        $minNumber = $_POST["numberOne"];
        $maxNumber = $_POST["numberTwo"];

        if ($minNumber >= $maxNumber) {
            $output = "O primeiro número deve ser maior que o segundo número.";
        } else {

            for ($i = $minNumber; $i <= $maxNumber; $i++) {
                if ($i % 2 == 0) {
                    //echo
                    $output .= $i . " ";

                }
            }
        }
    }

    ?>
</head>

<body>


    <form action="exer1.php" enctype="multipart/form-data" method="post">
        <h1>Digite dois números</h1>
        <div class="containerInput container">
            <input type="number" name="numberOne" id="numberOne" class="input" value="<?php echo $minNumber; ?>" />
            <input type="number" name="numberTwo" id="numberTwo" class="input" value="<?php echo $maxNumber; ?>" />
            <input type="submit" name="submit" value="Mostrar pares" id="buttonShow">
        </div>
    </form>

    <div class="container containerOutput"><?php echo $output; ?></div>

</body>

</html>