<?php

session_start();

include_once ("../banco/conexao.php");

$nome = $_POST['nome'];
$qtde_estoque = $_POST['qtde_estoque'];
$preco = $_POST['preco'];


$sql = "insert into produtos(nome, qtde_estoque, preco) values ( '$nome', '$qtde_estoque', '$preco')";
$salvar = mysqli_query($conn, $sql);
$_SESSION['msg'] = "Produto cadastrado com sucesso";
header("Location: ../paginas/cadProdutos.php");


