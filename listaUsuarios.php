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
            } else {
                $dados = mysqli_query($link, "Select * from usuarios;");
            }
            
            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        ?>
    <head>
    <body>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="listaUsuarios.php">Lista de usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="novoUsuario.php">Adicionar usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        <div id="conteudo">
            <h1>Lista de Usuários</h1>
            <p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <input type="text" name="parametro"/>
                    <input type="submit" value="buscar"/>
                </form>
            </p>
            <form action="novoUsuario.php">
            <button type="submit" name="entrar" id="entrar" class="btn btn-primary">Adicionar</button>
            </form>
            <table border="1px">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Email</td>
                <td>Login</td>
                <td>Ações</td>
            </tr>
            <?php 
                if($total) { 
                    do {
            ?>
            <tr>
                <td><?php echo $linha['id']?></td>
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

            <?php
                    } while($linha = mysqli_fetch_assoc($dados));

                    mysqli_free_result($dados);

                }
                mysqli_close($link);
            ?>
            </table>
        </div>
    </body>
</html>