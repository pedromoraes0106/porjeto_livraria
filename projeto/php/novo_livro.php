<?php
    include("verifica_usuario.php");
?>

<html>

    <head>
        <title>Novo livro</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/es_form.css">
    </head>

    <body>
        <form action="cadastro_l.php" method="post">
            <div class="form_box">

                <h1>Novo livro</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" required>

                <label>Autor</label>
                <input type="text" name="i_autor" class="i_text" required>

                <label>Editora</label>
                <input type="text" name="i_editora" class="i_text" required>

                <label>Gênero do livro</label>
                <input type="text" name="i_genero" class="i_text" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="30" rows="10" class="i_area" required></textarea>

                <label>Status do livro</label>
                <select name="i_status" required>
                    <option value=""></option>
                    <option value="D">Disponível</option>
                    <option value="E">Emprestado</option>
                </select>

                <input type="submit" value="Cadastrar livro" class="btt_form">

                <a href="painel.php">Voltar</a>

            </div>
        </form>
    </body>

</html>