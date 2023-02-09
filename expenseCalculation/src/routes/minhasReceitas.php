<?php 
include('../db/conectaBanco.php'); 

$sql = "SELECT *FROM receitas ";

$result = $mysqli->query($sql);

print_r($result);
?> 

<!-- //falta inclementar a rota -->


   