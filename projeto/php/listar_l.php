<?php

    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id = $_SESSION['usuario'];
        $query_1 = "select * from livro where fk_usuario = '{$id}'";
        $resposta = mysqli_query($conexao, $query_1);

        if(mysqli_num_rows($resposta) > 0)
        {
            ?>

            <html>

                <head>
                    <title>Livros</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/es_livro.css">
                </head>

                <body>
                    
                    <table>

                        <tr class="title_l">
                            <td colspan="10">Livros cadastrados no sitema da biblioteca</td>
                        </tr>

                        <tr class="title_l">
                            <td> ID do Livro</td>
                            <td>Titulo</td>
                            <td>Autor</td>
                            <td>Editora</td>
                            <td>Gênero</td>
                            <td>Descrição</td>
                            <td>Data</td>
                            <td>Status</td>
                            <td colspan="2">Opções</td>
                        </tr>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($resposta))
                        {
                            ?>

                            <tr class="item_l">
                                <td> <?php echo $row['id_livro'] ?> </td>
                                <td> <?php echo $row['titulo'] ?> </td>
                                <td> <?php echo $row['autor'] ?> </td>
                                <td> <?php echo $row['editora'] ?> </td>
                                <td> <?php echo $row['genero'] ?> </td>
                                <td> <?php echo $row['descricao'] ?> </td>
                                <td> <?php echo date("d/m/Y", strtotime($row['data_cadastro'])) ?> </td>

                                <?php

                                switch($row['status_livro'])
                                {
                                    case "D":
                                        echo "<td class='dis'> Disponível </td>";
                                        break;
                                    default:
                                        echo "<td class='emp'> Emprestado </td>";
                                }

                                ?>

                                <td>
                                    <a href="editar_livro.php?id_livro=<?php echo $row['id_livro'] ?>">Editar</a>
                                </td>

                                <td>
                                    <a href="deletar_l.php?id_livro=<?php echo $row['id_livro'] ?>">Excluir</a>
                                </td>

                            </tr>

                            <?php
                        }

                        ?>

                        <tr class="title_l">
                            <td colspan="10">
                                <a href="painel.php">Voltar</a>
                            </td>
                        </tr>

                    </table>

                </body>

            </html>

            <?php
        }
        
        else
        {
            ?>

            <html>

                <head>
                    <title>Não tem livros</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/es_concluido.css">
                </head>

                <body>
                    <div class="box">
                        <h1> Não existem livros cadastrados no sistema da biblioteca! </h1>
                        <a href="painel.php">Voltar</a>
                    </div>                    
                </body>

            </html>

            <?php
        }

    }

    else
    {
        header('Location: ../index.php');
    }

?>