<?php
    $id = filter_input(INPUT_GET, "id");
    $nome = filter_input(INPUT_GET, "nome");
    $sobrenome = filter_input(INPUT_GET, "sobrenome");
    $email = filter_input(INPUT_GET, "email");
    $login = filter_input(INPUT_GET, "login");
    $senha = filter_input(INPUT_GET, "senha");

    $link = mysqli_connect("localhost", "root", "", "db_php");

    if($link) {
        $query = mysqli_query($link, "update usuarios set nome = '$nome',
        sobrenome = '$sobrenome', email = '$email', login = '$login', 
        senha = '$senha' 
        where id = '$id';");
        if($query) {
            ?>
            <script> 
                alert('Usuário editado com sucesso!'); 
                window.location.replace("listaUsuarios.php");
            </script>
           <?php
        } else {
            die("ERRO: ".mysqli_error($link));
        }
    } else {
        die("ERRO: ".mysqli_error($link));
    }
?>