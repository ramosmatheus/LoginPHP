<?php
include_once ("../banco/conexao.php");
include_once ("../util/processa_listUsers.php");
session_start();
//if (!empty($_SESSION['id'])) {
    
/*} else {
    $_SESSION['msg'] = "Área restrita";
    header("Location: ../paginas/login.php");
}*/
?>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/paginas.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-light " style="background-color:#F7F7F7">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
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
                    <p><a href="#"></a></p>
                    <p><a href="#"></a></p>
                    <p><a href="#"></a></p>
                </div>
                <div class="col-sm-8 text-left"> 
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Nome de Usuario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row_listUsers = mysqli_fetch_assoc($resultado_users)) { ?>

                                    <tr>
                                        <td><?php echo $row_listUsers['id']; ?></td>
                                        <td><?php echo $row_listUsers['nome']; ?></td>
                                        <td><?php echo $row_listUsers['email']; ?></td>
                                        <td><?php echo $row_listUsers['usuario']; ?></td>
                                        <td>
                                        <td>
                                        <?php echo "<a class='btn btn-danger' role='button' href='../util/process_apaga_usuarios.php?id=" . $row_listUsers['id'] .  "'>Excluir</a>"; ?>                                      
                                        <a class="btn btn-primary" href="<?php echo "cadastro.php?id=".$row_listUsers['id'] . "&nome=" . $row_listUsers['nome'] . "&email=" . $row_listUsers['email'] . "&usuario=" . $row_listUsers['usuario']. "&senha=" . $row_listUsers['senha'] ?>">Alterar</a>
                                        </td>

                                 
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <button style="margin-left: 42%; " type="button" class="btn btn-success" data-toggle="modal" data-target="#modalNewProd">Cadastrar Usuário</button>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        echo ($_SESSION['msg']);
                        unset($_SESSION['msg']);
                    }
                    ?><br>

                    

                    </table>

                </div>
                
            </div>
            <div class="col-sm-2 sidenav"  style="background-color: white">
                <p><a href="#"></a></p>
                <p><a href="#"></a></p>
                <p><a href="#"> </a></p>

            </div>

        </div>
    </div>

 <!--MODAL CADASTRAR USUARIO-->

        <!-- The Modal -->
        <div class="modal fade" id="modalNewProd">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Cadastrar Usuario</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="text-left"> 
                            <form action="../util/processa_cad.php" method="POST">
                                <div>
                                    <br/>
                                    <label>Nome do usuário</label>
                                    <input class="form-control"  required="required" type="text" name="nome" placeholder="Digite o nome do usuário">
                                    <label>Email</label>
                                    <input class="form-control"  required="required" type="email" name="email" placeholder="Digite o email">
                                    <label>Nome de usuário</label>
                                    <input class="form-control"  required="required" type="text" name="usuario" placeholder="Digite nome de usuário">
                                    <label>Senha</label>
                                    <input class="form-control" required="required" type="password" name="senha" placeholder="Digite a senha">
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