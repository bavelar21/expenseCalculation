<?php
include('../db/conectabanco.php');
    session_start();
    $id=$_SESSION['id'];

    if(!isset($_SESSION['id'])){
        header("location: http://localhost/expenseCalculation/src/pages/");
    }

    $nome = $_POST['nome'];
    $preco_final = $_POST['preco_final']; 
    $tipo = $_POST['tipo']; 
    $descricao= $_POST['descricao'];
    $data_vencimento = $_POST['data_vencimento'];

    $insertProdutos = "INSERT INTO produtos (usuario_id, nome, preco_final, tipo, descricao, data_vencimento,usuario_id, receita_id	
 )
    VALUES ('$id', '$nome','$preco_final', '$tipo', '$descricao', '$data_vencimento')";

    $mysqli->query($insertProdutos);
    header("location: http://localhost/expenseCalculation/src/pages/novasReceitas.php");

?>
