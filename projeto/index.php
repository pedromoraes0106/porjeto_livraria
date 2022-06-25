<html>

    <head>
        <title>Tela de login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/es_form.css">
    </head>

    <body>
    <div class="text">Bem vindo ao sistema da livraria</div>

        <form action="php/login.php" method="post">
            <div class="form_box">

                <h1>Login</h1>

                <?php
                if(isset($_SESSION['not_autenticado'])){
                ?>

                    <div class="erro_box">
                        Usuário ou senha inválidos!
                    </div>  
                <?php
                }
                unset($_SESSION['not_autenticado'])
                ?>

                <label>Usuário</label>
                <input type="text" name="i_usuario" class="i_text" required>

                <label>Senha</label>
                <input type="password" name="i_senha" class="i_text" required>

                <input type="submit" value="Entrar" class="btt_form">

                <div class="link_box">
                    Funcionário novo? <a href="cad_usuario.php">Crie sua conta!</a>
                </div>

            </div>
        </form>
    </body>

</html>