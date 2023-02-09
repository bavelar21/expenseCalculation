
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Seja Bem vindo(a)<br>Faça seu Login</h1>

                <img src="imglogin.svg" class="left-login-imagem" alt="Financas animacao">
    </div>
        <div class="right-login">
    <div class="tela-login">
        <h1>LOGIN</h1>   
            <div class="textfield">
                <form action="../routes/login.php" method="post">
                   <label for="email">Usuário</label>
                    <input type="text" name="email" placeholder="E-mail" required>
                </div>
                <div class="textfield">
                   <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha"  required>
                </div>
                <div class="tela-cadastro">
                    <p id="conta">Não tem uma conta? <a href="cadastroUsuario.php" > Crie uma Conta.</a></p>
                </div>
                  <button type="submit"  class="botao-login">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>