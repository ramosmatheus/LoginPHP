<?php
include_once ("../banco/conexao.php");
include_once ("../util/processa_listUsers.php");
session_start();
if (!empty($_SESSION['id'])) {
    
} else {
    $_SESSION['msg'] = "Área restrita";
    header("Location: ../paginas/login.php");
}
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
                        <li><a href="cadProdutos.php"><i class="fa fa-address-book" aria-hidden="true"></i> Cadastrar Produtos</a></li>
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
                                <?php while ($row_listUsers = mysqli_fetch_assoc($resultado_users)){ ?>

                                    <tr>
                                        <td><?php echo $row_listUsers['id']; ?></td>
                                        <td><?php echo $row_listUsers['nome']; ?></td>
                                        <td><?php echo $row_listUsers['email']; ?></td>
                                        <td><?php echo $row_listUsers['usuario']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary">Editar</button>
                                            <button type="button" class="btn btn-danger">Excluir</button>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>

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

        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>
    </body>
</html>