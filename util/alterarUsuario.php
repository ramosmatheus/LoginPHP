<?php 

session_start();

include_once ("../banco/conexao.php");


$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$email = filter_input(INPUT_GET, "email");
$usuario = filter_input(INPUT_GET, "usuario");
$senha = filter_input(INPUT_GET, "senha"); 

$senhaCrip = password_hash($senha, PASSWORD_DEFAULT);


if($conn){
    
    $query = mysqli_query($conn, "update usuarios set nome = '$nome', email = '$email', usuario = '$usuario', senha = '$senhaCrip' where id='$id'");
    if($query){
        $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Usuário alterado com sucesso</p>";
        header("Location: ../paginas/listaUsers.php");

    }else{
        $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Usuário alterado com sucesso</p>";
        die("ERRO:".mysqli_error($conn));
    }

}else{
    die("ERRO:".mysqli_error($conn));
}











?>