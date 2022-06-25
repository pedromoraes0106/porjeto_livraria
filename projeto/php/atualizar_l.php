<?php

    include("conexao.php");

    $id_l = $_GET['id_livro'];
    $titulo_l = $_POST['i_titulo'];
    $autor_l = $_POST['i_autor'];
    $editora_l = $_POST['i_editora'];
    $genero_l = $_POST['i_genero'];
    $descricao_l = $_POST['i_descricao'];
    $status_l = $_POST['i_status'];

    $query_1 = "update livro set titulo = '{$titulo_l}', autor = '{$autor_l}', editora = '{$editora_l}', genero = '{$genero_l}', descricao = '{$descricao_l}', status_livro = '{$status_l}' where id_livro = '{$id_l}'";
    
    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_l.php');
    }else{
        ?>
        <h1> Erro na atualização do registro! </h1>
        <a href="listar_l.php">Voltar</a>
        <?php
    }

?>