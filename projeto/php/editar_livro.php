<?php
    
    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario']))
    {

        $id_livro = $_GET['id_livro'];
        $query_1 = "select * from livro where id_livro = '{$id_livro}'";
        $resposta = mysqli_query($conexao, $query_1);

        $row = mysqli_fetch_assoc($resposta);

    }
    
    else
    {
        header('Location: ../index.php');
    }

?>

<html>

    <head>
        <title>Editar livro</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/es_form.css">
    </head>

    <body>
        <form action="atualizar_l.php?id_livro=<?php echo $row['id_livro'] ?>" method="post">
            <div class="form_box">

                <h1>Editar livro</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" value="<?php echo $row['titulo'] ?>" required>

                <label>Autor</label>
                <input type="text" name="i_autor" class="i_text" value="<?php echo $row['autor'] ?>" required>

                <label>Editora</label>
                <input type="text" name="i_editora" class="i_text" value="<?php echo $row['editora'] ?>" required>

                <label>Gênero</label>
                <input type="text" name="i_genero" class="i_text" value="<?php echo $row['genero'] ?>" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="30" rows="10" class="i_area" required><?php echo $row['descricao'] ?></textarea>

                <label>Status do livro</label>
                <select name="i_status" required>
                    
                    <?php
                        switch($row['status_livro']){

                            case "D":
                                echo "<option value='D' selected>Disponível</option>";
                                echo "<option value='E'>Emprestado</option>";
                                break;

                            case "E":
                                echo "<option value='D'>Disponível</option>";
                                echo "<option value='E' selected>Emprestado</option>";

                            default:
                            echo "ERROR!";
                                
      
                        }
                    ?>

                </select>

                <input type="submit" value="Salvar edição" class="btt_form">

                <a href="listar_l.php">Voltar</a>

            </div>
        </form>
    </body>

</html>