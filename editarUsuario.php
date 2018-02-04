<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Usuário</title>
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
        <div id="conteudo">
            <h1>Editar Usuário</h1>
            <p>
                <form action="editar.php">
                    <input type="hidden" name="id" value="<?php echo $id?>"/>
                    Nome: <input type="text" name="nome" value="<?php echo $nome ?>" /><br> <br>
                    Sobrenome: <input type="text" name="sobrenome" value="<?php echo $sobrenome ?>"/><br> <br>
                    Email: <input type="text" name="email" value="<?php echo $email ?>"/><br> <br>
                    Login: <input type="text" name="login" value="<?php echo $login ?>"/><br> <br>
                    Senha: <input type="password" name="senha" value="<?php echo $senha ?>"/> <br> <br>
                    <input type="submit" value="Salvar"/>
                </form>
            </p>
        </div>
    </body>
</html>