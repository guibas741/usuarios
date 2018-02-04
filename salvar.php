<?php
    $nome = filter_input(INPUT_GET, "nome");
    $sobrenome = filter_input(INPUT_GET, "sobrenome");
    $email = filter_input(INPUT_GET, "email");
    $login = filter_input(INPUT_GET, "login");
    $senha = filter_input(INPUT_GET, "senha");

    $link = mysqli_connect("localhost", "root", "", "db_php");

    if($link) {
        $query = mysqli_query($link, "insert into usuarios(nome, sobrenome, email, login, senha) values('$nome', '$sobrenome', '$email', '$login', '$senha');");
        if($query) {
            header("Location: listaUsuarios.php");
        } else {
            die("ERRO: ".mysqli_error($link));
        }
    } else {
        die("ERRO: ".mysqli_error($link));
    }

?>