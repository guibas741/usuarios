<html>
    <head>
        <title>Novo Usuário</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <h1>Novo Usuário</h1>
        <div id="conteudo">
            <p>
                <form action="salvar.php" >
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nome">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Sobrenome</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="sobrenome">
                    </div>
           
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Login</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="login">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Senha</span>
                        </div>
                        <input type="password" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="senha">
                    </div>
           
                    <button type="submit" name="Adicionar" id="Adicionar" class="btn btn-primary">Adicionar</button>
                    <a href="login.php">Voltar</a>
                </form>
            </p>
        </div>
    </body>
</html>