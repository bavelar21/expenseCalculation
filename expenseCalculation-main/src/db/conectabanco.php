<?php
$usuario = 'root';
$senha = '';
$dataBase = 'expense';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $dataBase);

if($mysqli->error){
    die($mysqli->error);
}

?>
