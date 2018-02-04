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
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" id="login" name="login" size="35" aria-describedby="emailHelp" placeholder="Enter login">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
                </div>
                <div class="form-group col-lg-5">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="senha" name="senha" size="35" placeholder="Senha">
                </div>
                <div class="form-group col-lg-5">
                    <button type="submit" name="entrar" id="entrar" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </body>
</html>