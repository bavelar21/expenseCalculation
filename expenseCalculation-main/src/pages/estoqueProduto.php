<?php
session_start();
if(!isset($_SESSION['id'])){
 header("location: http://localhost/expenseCalculation/src/pages/");
}
include '../db/conectabanco.php';
$consulta = "SELECT * FROM materias_primas";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/materiaPrima.css">
    <title>Matéria Prima</title>
</head>
<header>
  <nav>
    <ul>
     <a href="estoqueProduto.php"><li>ESTOQUE DE PRODUTO</a>
      <a href="minhasReceitas.php"><li>MINHAS RECEITAS</a>
      <a href="cadastroMateriaPrima.php"><li>CADASTRO MATERIA PRIMA</a>
      <a href="novasReceitas.php"><li>NOVAS RECEITAS</a>
       <li><img id="logo" src="logoExpense.png" alt="logo"></li>
    </ul>
  </nav>
</header>
<body>
    
    <div class="container">
    <table class="table">
  <thead>
  <tr class="table-dark">
      <th scope="col">Nome Materia Prima</th>
      <th scope="col">Quantidade(gr)</th>  
      <th scope="col">Data Entrada</th>   
     <th scope="col">Descrição</th>
      <th scope="col">Valor Total R$</th>
    </tr>
    <?php while($dado = $con->fetch_array()){?>
  </thead>
  <tbody>
    <tr class="table-light">
      <td><?php echo $dado["id"]; ?></td>
      <td><?php echo $dado["valor"]; ?></td>
      <td><?php echo $dado["descricao"]; ?></td>
      <td><?php echo $dado["data_entrada"]; ?></td>
      <td><?php echo $dado["nome"]; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    
</body>
</html>