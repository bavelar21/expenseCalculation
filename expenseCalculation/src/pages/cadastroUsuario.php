<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../styles/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
 <div class="container">
        <div class="form-image">
            <img src="imgcadastro.svg" ></div>
                <div class="form" action="">
                    <div class="form-header">
                        <div class="title">
                            <h1>Criar Conta</h1>
                        </div>
                    </div>
<form action="../routes/cadastroUsuario.php" method="post">
    <div class="input-group">
        <div class="input-box">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" placeholder="Digite seu Nome" required>
        </div>

        <div class="input-box">
            <label for="email">E-mail</label>
            <input  type="email" name="email" placeholder="E-mail" required>
        </div>

        <div class="input-box">
           <label for="telefone_celular">Telefone Celular</label>
            <input type="tel" name="telefone_celular" placeholder="(xx) xxxx-xxxx" required>
        </div>

        <div class="input-box">
            <label for="data_nascimento">Data Nascimento</label>
            <input type="date" name="data_nascimento" placeholder="xx/xx/xxxx">
        </div>

        <div class="input-box">
            <label for="numero">Número</label>
            <input type="number" name="numero" placeholder="Digite o Número" required>
        </div>
           <div class="input-box">
            <label for="cep">Cep</label>
            <input  type="number" name="cep" placeholder="Digite o Cep" required>
        </div>

         <div class="input-box">
            <label for="logradouro">Logradouro</label>
            <input type="text" name="logradouro" placeholder="Digite o logradouro" required>
        </div>


        <div class="input-box">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" placeholder="Digite seu Bairro" required>
        </div>
        <div class="input-box">
            <label for="complemento">Complento</label>
            <input  type="text" name="complemento" placeholder="Digite seu complemento" required>
        </div>

        <div class="input-box">
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" required minlength="10" maxlength="100" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{10,}$">
        </div>

    </div>
        <div class="entrar-button">
            <button type="submit">Cadastrar</button> 
        </div>
 </form>  
    </div>
 </div>
</body>
</html> 