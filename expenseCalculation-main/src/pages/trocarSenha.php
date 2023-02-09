<?php
session_start();
if(!isset($_SESSION['id'])){
 header("location: http://localhost/expenseCalculation/src/pages/");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/trocarSenha.css">
    <title>Troque Senha</title>
</head>
<body>
<div>
    <h1>Troque sua Senha!</h1>
</div>
<form action="../routes/trocarSenha.php" method="post">
<div class="input-box">
        <label for="novaSenha">Senha Nova</label>
        <input type="password" name="senha" placeholder="Nova Senha" required>
        </div>
        </div>
        <div class="entrar-button">
        <button type="submit">Salvar</button> 
        </div>
        </form>
</body>
</html>