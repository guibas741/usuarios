<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Usuário</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <?php 
            $id = filter_input(INPUT_GET, "id");
            $nome = filter_input(INPUT_GET, "nome");
            $sobrenome = filter_input(INPUT_GET, "sobrenome");
            $email = filter_input(INPUT_GET, "email");
            $login = filter_input(INPUT_GET, "login");
            $senha = filter_input(INPUT_GET, "senha");
        ?>
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
                <a class="nav-link" href="novoUsuario.php">Adicionar Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buscaUsuario.php">Pesquisar Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        <div id="conteudo">
            <h1>Editar Usuário</h1>
            <p>
                <form action="editar.php">
                    <input type="hidden" name="id" value="<?php echo $id?>"/>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome" value="<?php echo $nome ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Sobrenome</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="sobrenome" value="<?php echo $sobrenome ?>">
                    </div>
                   
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email" value="<?php echo $email ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="login" value="<?php echo $login ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                        </div>
                        <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="senha" value="<?php echo $senha ?>">
                    </div>
                   
                    <button type="submit" name="Salvar" id="Salvar" class="btn btn-primary">Salvar</button>
                </form>
            </p>
        </div>
    </body>
</html>