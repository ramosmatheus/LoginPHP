<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Simple Login Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
        <div class="login-form">
        <?php
                        $id = filter_input(INPUT_GET, "id");
                        $nome = filter_input(INPUT_GET, "nome");
                        $email = filter_input(INPUT_GET, "email");
                        $usuario = filter_input(INPUT_GET, "usuario");
                        $senha = filter_input(INPUT_GET, "senha");
        ?>

        
            <form action="../util/alterarUsuario.php" method="GET">
                <h2 class="text-center">Alterar Cadastro</h2>
                <input type="hidden" class="form-control" placeholder="Nome" required="required" name="id" value="<?php echo $id ?>">
                <div class="form-group">
                <label>Nome do usuário:</label>
                    <input type="text" class="form-control" placeholder="Nome" required="required" name="nome" value="<?php echo $nome ?>">
                </div>
                <div class="form-group">
                <label>Email:</label>
                    <input type="text" class="form-control" placeholder="Email" required="required" name="email"  value="<?php echo $email ?>">
                </div>
                <div class="form-group">
                <label>Nome de usuário:</label>
                    <input type="text" class="form-control" placeholder="Nome de usuario" required="required" name="usuario"  value="<?php echo $usuario ?>">
                </div>
                <div class="form-group">
                <label>Senha:</label>
                    <input type="password" class="form-control" placeholder="Senha" required="required" name="senha" value="<?php echo $senha ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Alterar</button>
                </div>       

            </form>

        </div>
    </body>
</html>                                		