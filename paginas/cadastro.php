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
            <form action="../util/processa_cad.php" method="POST">
                <h2 class="text-center">Cadastre-se</h2>  
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome" required="required" name="nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" required="required" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome de usuario" required="required" name="usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                </div>
                <div class="clearfix">
                    <p style="text-align: center;">
                        <?php
                        session_start();
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                    </p>
                </div>        

            </form>

        </div>
    </body>
</html>                                		