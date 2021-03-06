<?php include 'checkSession.php' ?>
<html>
    <head>
        <title>Novo Usuário</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listaUsuarios.php">Lista de Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="novoUsuario.php">Adicionar Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buscaUsuario.php">Pesquisar Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" onclick="return confirm('Tem certeza que deseja sair?')">Logout</a>
            </li>
        </ul>
        <h1>Novo Usuário</h1>
        <div id="conteudo">
            <p>
                <form action="salvar.php" >
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Sobrenome</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="sobrenome" required>
                    </div>
           
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Login</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="login" required>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                        </div>
                        <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="senha" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Permissão do usuário</label>
                        </div>
                        <select class="custom-select" id="administrador" name="administrador">
                            <option selected>Escolha...</option>
                            <option value="administrador">Administrador</option>
                            <option value="usuario">Usuário</option>
                        </select>
                    </div>
           
                    <button type="submit" name="Adicionar" id="Adicionar" class="btn btn-primary">Adicionar</button>
                </form>
            </p>
        </div>
    </body>
</html>