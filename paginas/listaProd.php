<?php
include_once ("../banco/conexao.php");
include_once ("../util/processa_listProd.php");
session_start();
//if (!empty($_SESSION['id'])) {
    
/*} else {
    $_SESSION['msg'] = "Área restrita";
    header("Location: ../paginas/login.php");
}*/
?>
<html>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../css/paginas.css">
    </head>
    <body>

        <nav class="navbar navbar-light " style="background-color:#F7F7F7">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""><i class="fa fa-cube" aria-hidden="true"></i> Ramos</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav" >
                        <li class="active"><a href="principal.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li><a href="listaProd.php"><i class="fa fa-list" aria-hidden="true"></i> Lista de Produtos</a></li>
                        <li><a href="listaUsers.php"><i class="fa fa-users" aria-hidden="true"></i> Lista de Usuarios</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../util/sair.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid text-center">    
            <div class="row content" >
                <div class="col-sm-2 sidenav"  style="background-color: white">
                    <!--PRIMEIRA COLUNA-->
                </div>
                <div class="col-sm-8 text-left"> 
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Quantidade em estoque</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row_listProd = mysqli_fetch_assoc($resultado_prod)) { ?>

                                    <tr>
                                        <td><?php echo $row_listProd['idprod']; ?></td>
                                        <td><?php echo $row_listProd['nome']; ?></td>
                                        <td><?php echo $row_listProd['qtde_estoque']; ?></td>
                                        <td><?php echo 'R$ ' . $row_listProd['preco']; ?></td>
                                        <td>
                                        <?php echo "<a class='btn btn-danger' role='button' href='../util/process_apaga_prod.php?id=" . $row_listProd['idprod'] . "'>Excluir</a>"; ?>      
                                      
                                        <a class="btn btn-primary" href="<?php echo "cadastroProd.php?idprod=".$row_listProd['idprod'] . "&nome=" . $row_listProd['nome'] . "&qtde_estoque=" . $row_listProd['qtde_estoque'] . "&preco=" . $row_listProd['preco'] ?>">Alterar</a>
                                        </tr>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <button style="margin-left: 42%" type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNewProd">Cadastrar produto</button>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo ($_SESSION['msg']);
                        unset($_SESSION['msg']);
                    }
                    ?><br>

                </div>
                <div class="col-sm-2 sidenav"  style="background-color: white">
                  <!--TERCEIRA COLUNA-->
                </div>
            </div>
        </div>

        <!--MODAL CADASTRAR PRODUTO-->

        <!-- The Modal -->
        <div class="modal fade" id="modalNewProd">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastrar Produto</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="text-left"> 
                            <form action="../util/processa_prod.php" method="POST">
                                <div>
                                    <br/>
                                    <label>Nome do produto</label>
                                    <input class="form-control"  required="required" type="text" name="nome" placeholder="Digite o nome do produto">
                                    <label>Quantidade em estoque</label>
                                    <input class="form-control"  required="required" type="text" name="qtde_estoque" placeholder="Digite a quantidade em estoque">
                                    <label>Preço</label>
                                    <input class="form-control"  required="required" type="text" name="preco" placeholder="Digite o preço do produto">
                                    <br>
                                    <button type="submit" class="btn btn-success">Cadastrar</button>


                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>