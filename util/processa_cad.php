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
$_SESSION['msg'] = "Cadastro realizado com sucesso";
header("Location: ../paginas/login.php");


