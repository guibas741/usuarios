<html>
    <head>
        <title>Lista de Usuários</title>
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
        <div id="conteudo">
            <h1>Lista de Usuários</h1>
            <p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <input type="text" name="parametro"/>
                    <input type="submit" value="buscar"/>
                </form>
            </p>
            <p>
                <a href="novoUsuario.php">Novo Usuário</a>
            </p>
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