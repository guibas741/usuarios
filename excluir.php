<?php 
    $id = filter_input(INPUT_GET, "id");

    $link = mysqli_connect("localhost", "root", "", "db_php");

    if($link) {
        $query = mysqli_query($link, "delete from usuarios where id = '$id';");
        if($query) {
            ?>
            <script> 
                alert('Usuário deletado com sucesso!'); 
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