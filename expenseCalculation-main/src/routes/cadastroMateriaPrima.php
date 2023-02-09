<?php
include('../db/conectabanco.php');
    session_start();
    $nomeMateriaPrima = $_POST['nomeMateriaPrima'];
    $descricao = $_POST['descricaoMateriaPrima'];
    $nomeQuantidadeMateriaPrima = $_POST['nomeQuantidadeMateriaPrima']; 
    $nomeValorTotal = $_POST['nomeValorTotalMateriaPrima']; 
    $data_entrada= $_POST['datadeEntrada'];

    $insertCadastroMateriaPrima = "INSERT INTO materias_primas (valor, descricao, data_entrada, nome)
    VALUES ('$nomeValorTotal', '$descricao', '$data_entrada', '$nomeMateriaPrima')";

$mysqli->query($insertCadastroMateriaPrima);
header("location: http://localhost/expenseCalculation/src/pages/cadastroMateriaPrima.php");
    ?>