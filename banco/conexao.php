<?php

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$dbname = "bancoteste";

//Criar Conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn) {

    die("Falha na conexao: " . mysqli_connect_error());
} else {
//        echo "conexão realizada com sucesso";
}
