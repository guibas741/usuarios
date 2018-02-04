<html>
    <head>
        <title>Lista de Usuários</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.min.js" rel="stylesheet" media="screen">
        <meta charset="UTF-8">
        <?php
            $parametro = filter_input(INPUT_GET, "parametro");
            $link = mysqli_connect("localhost", "root", "", "db_php");
        
            $dados = mysqli_query($link, "Select * from usuarios;");
            
            $linha = mysqli_fetch_assoc($dados);
            $total = mysqli_num_rows($dados);
        ?>
    <head>
    <body>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="listaUsuarios.php">Lista de Usuários</a>
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
            <h1>Lista de Usuários</h1>
 
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
                    <a href="<?php echo "excluir.php?id=".$linha['id'] ?>" onclick="return confirm('Tem certeza que deseja deletar?')">Excluir</a></td>
                  
                </tr>
            </tbody>

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