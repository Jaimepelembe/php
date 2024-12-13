<?php

$dataSourceName="mysql:host=localhost;dbname=agendacontactos";
$dataBaseUsername="root";
$dataBasePassword="";

try{
$phpDataObject= new PDO($dataSourceName,$dataBaseUsername,$dataBasePassword); //Is most flexible for all data base. When msqli is only for mysql database
$phpDataObject->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $exception){
    echo "Connection failed: ".$exception->getMessage();
    die();
}