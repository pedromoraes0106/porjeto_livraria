<?php

    session_start();
    include("conexao.php");

    $usuario = mysqli_real_escape_string($conexao, $_POST['i_usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['i_senha']);

    $query_1 = "select id_usuario from usuario where login = '{$usuario}' and senha = md5('{$senha}')";
    $resposta = mysqli_query($conexao, $query_1);
    $row = mysqli_num_rows($resposta);

    if($row == 1){
        $row = mysqli_fetch_assoc($resposta);
        $_SESSION['usuario'] = $row['id_usuario'];
        header('Location: painel.php');
    }else{
        $_SESSION['not_autenticado'] = true;
        echo "<script> javascript:history.go(-1) </script>";
    }

?>