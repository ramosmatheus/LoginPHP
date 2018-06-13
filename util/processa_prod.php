<?php

session_start();

include_once ("../banco/conexao.php");

$nome = $_POST['nome'];
$qtde_estoque = $_POST['qtde_estoque'];
$preco = $_POST['preco'];


$sql = "insert into produtos(nome, qtde_estoque, preco) values ( '$nome', '$qtde_estoque', '$preco')";
$salvar = mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<br><p style='color:#5caedc; text-align: center'>Produto cadastrado com sucesso";
    header("Location: ../paginas/listaProd.php");
} else {
    $_SESSION['msg'] = "<p style='color:red; text-align: center'>Produto não foi cadastrado</p>";
    header("Location: ../paginas/listaProd.php");
}

