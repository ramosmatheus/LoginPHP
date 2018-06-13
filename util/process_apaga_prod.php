<?php

session_start();
include_once ("../banco/conexao.php");


$id = filter_input(INPUT_GET, 'id');
$result_produto = "DELETE FROM produtos WHERE idprod = '$id'";
$resultado_produto = mysqli_query($conn, $result_produto);

if(mysqli_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Produto excluido com sucesso</p>";
    header("Location: ../paginas/listaProd.php");
} else{
    $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Erro ao excluir o produto</p>";
    header("Location: ../paginas/listaProd.php");
}
