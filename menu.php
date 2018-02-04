<html>
    <head>
      <title>MENU</title>
      <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
      <meta charset="UTF-8">
    </head>
    <body>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" href="menu.php">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaUsuarios.php">Lista de usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="novoUsuario.php">Adicionar usuário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    <div>
    <?php
      $login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
          echo"Bem-Vindo, $login_cookie <br>";
        }
    ?>
    </div>
    </body>
</html>
