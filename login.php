<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container">
            <div class="form-group col-lg-5">
                <h1>Login</h1>
            </div>
            
            <form method="post" action="autenticador.php" name="loginForm">
                <div class="form-group col-lg-5">
                    <label for="login">Usuário</label>
                    <input type="text" class="form-control" required  id="login" name="login" size="35" placeholder="Enter login">
                </div>
                <div class="form-group col-lg-5">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" required id="senha" name="senha" size="35" placeholder="Password">
                </div>
                <div class="form-group col-lg-5">
                    <button type="submit" name="entrar" id="entrar" class="btn btn-primary">Entrar</button>
                </div>
                <div class="form-group col lg-5">
                    <a href="cadastro.php">Cadastre-se</a>
                </div>
            </form>
        </div>
    </body>
</html>
