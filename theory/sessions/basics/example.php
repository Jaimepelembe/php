<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de sessão</title>
</head>
<body>
<?php echo "Hello my name is ".$_SESSION['userName']  ?>
</body>
</html>