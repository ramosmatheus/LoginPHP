<?php 

session_start();

include_once ("../banco/conexao.php");


$idprod = filter_input(INPUT_GET, "idprod");
$nome = filter_input(INPUT_GET, "nome");
$qtde_estoque = filter_input(INPUT_GET, "qtde_estoque");
$preco = filter_input(INPUT_GET, "preco"); 



if($conn){
    
    $query = mysqli_query($conn, "update produtos set nome = '$nome', qtde_estoque = '$qtde_estoque', preco = '$preco' where idprod='$idprod'");
    if($query){
        $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Produto alterado com sucesso</p>";
        header("Location: ../paginas/listaProd.php");

    }else{
        $_SESSION['msg'] = "<p style='text-align: center ; color: #5CAEDC ;'>Erro ao alterar o produto</p>";
        die("ERRO:".mysqli_error($conn));
    }

}else{
    die("ERRO:".mysqli_error($conn));
}











?>