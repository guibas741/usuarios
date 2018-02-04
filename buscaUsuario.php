<html>
    <head>
        <title>Lista de Usuários</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <meta charset="UTF-8">
        <?php
            $parametro = filter_input(INPUT_GET, "parametro");
            $link = mysqli_connect("localhost", "root", "", "db_php");
           

            if($parametro) {
                $dados = mysqli_query($link, "select * from usuarios where nome like '$parametro%';");
                $linha = mysqli_fetch_assoc($dados);
                $total = mysqli_num_rows($dados);
            }
            
            
        ?>
    <head>
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
                <a class="nav-link active" href="buscaUsuario.php">Pesquisar Usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        <div id="conteudo">
            <h1>Lista de Usuários</h1>
            <p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="input-group mb-3 col-lg-5" >
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="parametro">
                        <button type="submit" name="pesquisar" id="pesquisar" class="btn btn-primary">Pesquisar</button>
                    </div>
                </form>
            </p>
            <form action="novoUsuario.php">
                <button type="submit" name="entrar" id="entrar" class="btn btn-primary">Adicionar</button>
            </form>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Login</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
            <?php 
                if($parametro) {
                    if($total) { 
                     do {
            ?>
            <tbody>
                <tr> 
                    <td scope="row"><?php echo $linha['id']?></td>
                    <td><?php echo $linha['nome']?></td>
                    <td><?php echo $linha['sobrenome']?></td>
                    <td><?php echo $linha['email']?></td>
                    <td><?php echo $linha['login']?></td>
                    <td><a href="<?php echo "editarUsuario.php?id=".$linha['id']."&nome=".$linha['nome'].
                    "&sobrenome=".$linha['sobrenome']."&email=".$linha['email']."&login=".$linha['login']."
                    &senha=".$linha['senha'] ?>">
                        Editar</a>
                    <a href="<?php echo "excluir.php?id=".$linha['id'] ?>">Excluir</a></td>

                </tr>
            </tbody>

            <?php
                        } while($linha = mysqli_fetch_assoc($dados));

                        mysqli_free_result($dados);

                    }
                    mysqli_close($link);
                }
            ?>
            </table>
        </div>
    </body>
</html>