<html>
    <head>
        <title>Novo Usuário</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listaUsuarios.php">Lista de usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="novoUsuario.php">Adicionar usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        <h1>Novo Usuário</h1>
        <div id="conteudo" class="form-group row">>
            <p>
                <form action="salvar.php" >
                    Nome: <input type="text" name="nome"/><br> <br>
                    Sobrenome: <input type="text" name="sobrenome"/><br> <br>
                    Email: <input type="text" name="email"/><br> <br>
                    Login: <input type="text" name="login"/><br> <br>
                    Senha: <input type="password" name="senha"/> <br> <br>
                    <input type="submit" value="Adicionar"/>
                </form>
            </p>
        </div>
    </body>
</html>