<?php 
    $id = filter_input(INPUT_GET, "id");

    $link = mysqli_connect("localhost", "root", "", "db_php");

    if($link) {
        $query = mysqli_query($link, "delete from usuarios where id = '$id';");
        if($query) {
            header("Location: listaUsuarios.php");
        } else {
            die("ERRO: ".mysqli_error($link));
        }
    } else {
        die("ERRO: ".mysqli_error($link));
    }
?>