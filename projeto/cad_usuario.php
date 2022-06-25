<?php session_start(); ?>
<html>
    <head>
        <title>Cadastro de usuário</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/es_form.css">
    </head>
    <body>

        <div class="text">Bem vindo ao sistema da livraria</div>

        <form action="php/cadastro_u.php" method="post" enctype="multipart/form-data">
            <div class="form_box">

                <h1>Novo cadastro</h1>

                <label>Nome</label>
                <input type="text" name="i_nome" class="i_text" required>

                <label>Sobrenome</label>
                <input type="text" name="i_sobrenome" class="i_text" required>

                <?php
                if(isset($_SESSION['not_usuario'])){
                ?>
                    <div class="erro_box">
                        O nome de usuário já está em uso!
                    </div>
                <?php
                }
                unset($_SESSION['not_usuario']);
                ?>
                <label>Nome de usuário</label>
                <input type="text" name="i_usuario" class="i_text" required>
                <label>Senha</label>
                <input type="password" name="i_senha" class="i_text" required>
                <?php
                if(isset($_SESSION['not_arquivo'])){
                ?>
                    <div class="erro_box">
                        Não é uma imagem válida!
                    </div>
                <?php
                }
                unset($_SESSION['not_arquivo']);
                ?>

                <label>Foto</label>
                    <div class="foto_box">
                        O arquivo deve ser jpg, jpeg, png ou gif com tamanho máximo de 5MB!
                    </div>

                <input type="file" name="i_foto" id="i_foto" class="i_file" required>

                <input type="submit" value="Cadastrar" class="btt_form">

                <div class="link_box">
                    <a href="index.php">Voltar</a>
                </div>
            </div>
        </form>
    </body>
</html>