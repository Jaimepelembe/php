<?php 
//Database information
$dbHost="localhost"; 
$dbUsername="root"; //Username 
$dbPassword=""; //Password 
$dbName="formulario_clientes"; //Name 

$conection= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if($conection -> connect_errno){
echo "Erro de conexão";

} else{

    echo "Conexão efectuada com sucesso";
}

?>