<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contactos</title>
<link rel="shortcut icon" href="images/telephonered.png" type="image/x-icon">

<!--Style CSS-->
<link rel="stylesheet" href="styles/main.css" media="all">
<link rel="stylesheet" href="styles/header.css" media="all">
<link rel="stylesheet" href="styles/alert.css" media="all">
<link rel="stylesheet" href="styles/tableStyle.css" media="all">
<link rel="stylesheet" href="styles/tableMobile.css" media="all and (max-width:768px)">
</head>

<body>
<?php include("header.php"); ?>
<?php include ("../includes/alert.php") ?>

<main id="main" tabindex="0" onclick="closeSideBar()">
<?php include("responsiveTable.php") ?>

</main>

<?php include("footer.php");?>

</body>

<!--Javascript-->
<script src="javascript/validation.js"></script>

</html>