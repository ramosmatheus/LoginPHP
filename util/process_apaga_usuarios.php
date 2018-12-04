<?php

session_start();
include_once ("../banco/conexao.php");


$id = filter_input(INPUT_GET, 'id');
$result_produto = "DELETE FROM usuarios WHERE id = '$id'";
$resultado_produto = mysqli_query($conn, $result_produto);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Usuário excluido com sucesso</p>";
    header("Location: ../paginas/listaUsers.php");
} else{
    $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Erro ao excluir o usuário</p>";
    header("Location: ../paginas/listaUsers.php");
}
