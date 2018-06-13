<?php

include_once ("../banco/conexao.php");



$result_users = "SELECT * FROM usuarios";
$resultado_users = mysqli_query($conn, $result_users);



