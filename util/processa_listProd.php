<?php

include_once ("../banco/conexao.php");

$result_prod = "SELECT * FROM produtos";
$resultado_prod = mysqli_query($conn, $result_prod);