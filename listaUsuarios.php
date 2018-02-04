<html>
    <head>
        <title>Lista de Usuários</title>
        <meta charset="UTF-8">
        <?php
            $parametro = filter_input(INPUT_GET, "parametro");
            $mysqlLink = mysql_connect("localhost", "root", "");
            mysql_select_db("db_php");

            $dados = mysql_query("Select * from usuarios");
            
            $linha = mysql_fetch_assoc($dados);
            $total = mysql_num_rows($dados);
        ?>
    <head>
    <body>
        <div id="conteudo">
            <h1>Lista de Usuários</h1>
            <table border="1px">
            <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Email</td>
                <td>Login</td>
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
            </tr>

            <?php
                    } while($linha = mysql_fetch_assoc($dados));

                    mysql_free_result($dados);

                }
                mysql_close($mysqlLink);
            ?>
            </table>
        </div>
    </body>
</html>