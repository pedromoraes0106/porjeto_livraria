<?php

    include("conexao.php");

    $id_livro = $_GET['id_livro'];
    $query_1 = "delete from livro where id_livro = '{$id_livro}'";

    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_l.php');
    }else{
        ?>
        <h1>Erro na hora de deletar o registro!</h1>
        <a href="listar_l.php">Voltar</a>
        <?php
    }

?>