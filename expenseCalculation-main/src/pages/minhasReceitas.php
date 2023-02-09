<?php
session_start();
if(!isset($_SESSION['id'])){
 header("location: http://localhost/expenseCalculation/src/pages/");
}
include('../db/conectaBanco.php'); 

$sql = "SELECT *FROM receitas";

$result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../styles/minhasReceitas.css">
    <title>Minhas Receitas</title>
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
    
    <?php while($dado = $result->fetch_array()){ ?>
      <div class="card" style="display:inline-block">
  <div class="fundoCard card-body">
    <h1 class="card-title"><?php echo $dado["nome"]; ?></h1>
    <div>
      <tr>
      <p> <strong>Sua margem de lucro é:</strong>  <td><?php echo $dado["margem_lucro"]; ?></td> %</p> 
      
      
     <p> <strong>A sua embalagem é:</strong>  <td><?php echo $dado["embalagem"]; ?></td></p>
     
      <p> <strong>Data de produção é:</strong>  <td><?php echo $dado["data_producao"]; ?></td></p>
     
    </tr>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Fabricar
</button>
 
  </table>
</div>  

  </div>
</div>
<?php }?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Titulo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       meu resumo aqui
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
      </div>
    </div>
  </div>
</div>
</form> 


</body>
</html>