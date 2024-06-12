<html> <head><title>Resultado</title>
</head>

<body>
<?php 
echo "Declaração de variáveis <br>";

//Exemplo de variáveis
echo " Exemplo de variáveis PHP";
$variavel ="valor";
$_variavel = 0;
$nome = "João";
$cidade = "Maputo";
$mes1 = "Janeiro";

//Exemplo de declaração de constantes
echo "<br>";
define("VARIAVEL","Jaime");
echo "O valor da constante é: ".VARIAVEL;


//Exemplo de declaração de arrays
echo "<br>";
$cores[0]="Red";
$cores[1]="Green";
$cores[2]="Blue";

//Exemplo de declaração de arrays associativos
//Provincias e capitais
$provincia_e_capital=array('MP'=> 'Matola', 'SF'=>'Beira','TT'=>'Tete','MN'=>'Manica');
echo $provincia_e_capital['MP'];

//Cores
$cor['red']=0;
$cor['green']=255;
$cor['blue']=0;

//ou
$cores2=array('red'=>0,'green'=>1,'blue'=>2);

?>


</body>
</html>