<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
        <div class="login-form">
            <form action="../util/processa_login.php" method="POST">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" required="required" name="usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="senha">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" name="btnLogin" id="entrar" value="Login">
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                    <a href="#" class="pull-right">Perdeu sua senha?</a>
                </div> <br/>
                <p style="text-align: center;">
                    <?php
                    session_start();
                    if (isset($_SESSION['msg'])) {
                        echo ($_SESSION['msg']);
                        unset($_SESSION['msg']);
                    }
                    ?>
                </p>
            </form>
            <p class="text-center"><a href="../paginas/cadastro.php">Crie sua conta</a></p>
        </div>

    </body>
</html>                                		