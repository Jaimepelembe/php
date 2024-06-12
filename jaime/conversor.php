<?php

// Receber os dados do formulário
$horas = $_POST['horas'];
$minutos = $_POST['minutos'];
$segundos = $_POST['segundos'];

// Converter tempo para segundos
$totalEmSegundos = ($horas * 3600) + ($minutos * 60) + $segundos;

// Exibir o resultado
echo "O total convertido em segundos é: $totalEmSegundos";

?>