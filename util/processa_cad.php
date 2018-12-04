<?php

session_start();

include_once ("../banco/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$senhaCrip = password_hash($senha, PASSWORD_DEFAULT);
$sql = "insert into usuarios(nome, email, usuario, senha) values ( '$nome', '$email', '$usuario' , '$senhaCrip')";
$salvar = mysqli_query($conn, $sql);
$_SESSION['msg'] = "<br><p style='color:#5caedc; text-align: center'>Usuário cadastrado com sucesso";
header("Location: ../paginas/listaUsers.php");


