<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method="post" action="autenticador.php" name="loginForm">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" id="login" name="login" size="35" aria-describedby="emailHelp" placeholder="Enter login">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="senha" name="senha" size="35" placeholder="Senha">
                    </div>
                    <button type="submit" name="entrar" id="entrar" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </body>
</html>