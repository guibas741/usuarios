<?php
    include 'configDb.php';
    include 'inputColumns.php';

    if($connection) {
        $query = mysqli_query($connection, 
        "update usuarios 
            set nome  = '$nome',
            sobrenome = '$sobrenome', 
            email     = '$email', 
            login     = '$login', 
            senha     = '$senha' 
            where id = '$id';");
        if($query) {
            ?>
            <script> 
                alert('Usuário editado com sucesso!'); 
                window.location.replace("listaUsuarios.php");
            </script>
           <?php
        } else {
            die("ERRO: ".mysqli_error($connection));
        }
    } else {
        die("ERRO: ".mysqli_error($connection));
    }
?>