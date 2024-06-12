<html> <head><title>Exercicio 1</title>
<link rel="stylesheet" href="styles/style.css">

<!--code PHP-->
<?php 
$number=$_POST["number"];
if($number>0){
    echo "O número é positivo";
}
else{
    if($number== 0){
        echo "O número é zero";
    }
    else{echo "O número é negativo";} 
}

?>
</head>
</html>