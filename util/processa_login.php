<?php

session_start();
include_once("../banco/conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if ($btnLogin) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    
    if ((!empty($usuario)) AND ( !empty($senha))) {
        //Pesquisar o usuário no banco de dados
        $result_usuario = "SELECT id, nome, email, senha FROM usuarios WHERE usuario='$usuario' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        if ($resultado_usuario) {
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
           
            if (password_verify($_SESSION['senha'], $row_usuario['senha'])) {
                
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                $_SESSION['email'] = $row_usuario['email'];
                header("Location: ../paginas/principal.php");
            } else {
                $_SESSION['msg'] = "Login ou senha incorretos!";
                header("Location: ../paginas/login.php");
            }
        }
    } else {
        $_SESSION['msg'] = "Login ou senha incorretos!";
        header("Location: ../paginas/login.php");
    }
} else {
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: ../paginas/login.php");
}
