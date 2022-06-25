<?php

    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id = $_SESSION['usuario'];
        $query_1 = "select * from usuario where id_usuario = '{$id}'";
        $resposta = mysqli_query($conexao, $query_1);

        $row = mysqli_fetch_assoc($resposta);

    }else{
        header('Location: ../index.php');
    }

?>