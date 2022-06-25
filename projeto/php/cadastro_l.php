<?php

    session_start();
    include("conexao.php");
    
    if(isset($_SESSION['usuario'])){

        $fk_usuario = $_SESSION['usuario'];
        $titulo_l = $_POST['i_titulo'];
        $autor_l = $_POST['i_autor'];
        $editora_l = $_POST['i_editora'];
        $genero_l = $_POST['i_genero'];
        $descricao_l = $_POST['i_descricao'];
        $status_l = $_POST['i_status'];

        $query_1 = "insert into livro (fk_usuario, titulo, editora, autor, genero, descricao, data_cadastro, status_livro)
                    values ('{$fk_usuario}', '{$titulo_l}', '{$autor_l}', '{$editora_l}', '{$genero_l}', '{$descricao_l}', NOW(), '{$status_l}')";

        mysqli_query($conexao, $query_1);

    }else{
        header('Location: ../index.php');
    }

?>

<html>

    <head>
        <title>Cadastro concluído</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/es_concluido.css">
    </head>

    <body>
        <div class="box">
            <h1>Cadastro de livro concluído!</h1>
            <a href="painel.php">Voltar</a>
        </div>
    </body>

</html>