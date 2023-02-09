<?php
session_start();
if(!isset($_SESSION['id'])){
 header("location: http://localhost/expenseCalculation/src/pages/");
}
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/cadastroProdutos.css">
    <title>Cadastro Produtos</title>
    <link rel="stylesheet" href="style.css">

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
  <form action="../routes/cadastroMateriaPrima.php" method="post">
    <div class="row">
        <div class="col">
          <h5>Nome Matéria Prima</h5>
          <input type="text" class="form-control" name="nomeMateriaPrima" placeholder="Ex: Cenoura" required>
          <br>
          <h5>Descrição</h5>
          <input type="text" class="form-control"  name="descricaoMateriaPrima" placeholder="Ex: Rico em vitamina A" required>
                    <br>
          <!-- <h5>Quantidade</h5>
          <input type="number" class="form-control"  name="nomeQuantidadeMateriaPrima"placeholder="Ex: 100gr" required>
                    <br> -->
          <h5>Valor Total</h5>
          <input type="number" class="form-control"  name="nomeValorTotalMateriaPrima"placeholder="Ex: 50.00"required>
                    <br>
          <h5>Data Entrada</h5>
          <input type="date" class="form-control" name="datadeEntrada" placeholder="Ex: 30/09/2022" required>
        </div>   
       <div class="button">
<button type="submit"  class="btn btn-primary">Salvar</button>
</div>
</form>
</div>
</body>
</html>
