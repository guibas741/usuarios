<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = ($_POST['senha']);
  $connect = mysqli_connect('localhost','root','', 'db_php');
 // session_start();
    if (isset($entrar)) {
      $verifica = mysqli_query($connect, "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
            echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
            die();
        }else{
            setcookie("login",$login);
            //session_register("myusername");
            //$_SESSION['login_user'] = $myusername;
            header("Location:menu.php");
        }
    }
?>