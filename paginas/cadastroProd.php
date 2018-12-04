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
                        $idprod = filter_input(INPUT_GET, "idprod");
                        $nome = filter_input(INPUT_GET, "nome");
                        $qtde_estoque = filter_input(INPUT_GET, "qtde_estoque");
                        $preco = filter_input(INPUT_GET, "preco");
                       
        ?>

        
            <form action="../util/alterarProduto.php" method="GET">
                <h2 class="text-center">Alterar Cadastro</h2>
                <input type="hidden" class="form-control"  required="required" name="idprod" value="<?php echo $idprod ?>">
                <div class="form-group">
                <label>Nome do produto</label>
                    <input type="text" class="form-control"  required="required" name="nome" value="<?php echo $nome ?>">
                </div>
                <div class="form-group">
                <label>Quantidade em estoque</label>
                    <input type="text" class="form-control"  required="required" name="qtde_estoque"  value="<?php echo $qtde_estoque ?>">
                </div>
                <div class="form-group">
                <label>Preço</label>
                    <input type="text" class="form-control"  required="required" name="preco"  value="<?php echo $preco ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Alterar</button>
                </div>       

            </form>

        </div>
    </body>
</html>                                		