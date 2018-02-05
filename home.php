<html>
    <head>
      <title>MENU</title>
      <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <meta charset="UTF-8">
    </head>
    <body>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="home.php">Home</a>
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
          <a class="nav-link" href="logout.php" onclick="return confirm('Tem certeza que deseja sair?')">Logout</a>
        </li>
      </ul>
      <div>
        <h1>
          <?php
            $login_cookie = $_COOKIE['login'];
            include 'configDB.php';
           
            $query = mysqli_query($connection, "Select * from usuarios where login = '$login_cookie';");
            $linha = mysqli_fetch_assoc($query);
            $nome = $linha['nome'];
              if(isset($login_cookie)){
               
                echo "<h1>Bem-Vindo, $nome </h1>";
              }
          ?>
        </h1>
      </div>
    </body>
</html>
