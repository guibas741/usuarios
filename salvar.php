<?php
    include 'inputColumns.php';
    include 'configDb.php';

    if($connection) {
        $query = mysqli_query($connection, "insert into usuarios(nome, sobrenome, email, login, senha, administrador) values('$nome', '$sobrenome', '$email', '$login', '$senha', '$administrador');");
        if($query) {
            ?>
            <script> 
                alert('Usuário adicionado com sucesso!'); 
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