<?php
include('../db/conectaBanco.php');
    session_start();
    $id=$_SESSION['id'];

    if(!isset($_SESSION['id'])){
        header("location: http://localhost/expenseCalculation/src/pages/");
    }

    $margem_lucro = $_POST['margem_lucro'];
    $nome = $_POST['nome']; 
    $embalagem = $_POST['embalagem']; 
    $data_producao= $_POST['data_producao'];


    $insertNovasReceitas = "INSERT INTO receitas (usuario_id, margem_lucro, nome, embalagem, data_producao)
    VALUES ('$id','$margem_lucro', '$nome', '$embalagem', '$data_producao')";

    $mysqli->query($insertNovasReceitas);
    header("location: http://localhost/expenseCalculation/src/pages/novasReceitas.php");

?>

