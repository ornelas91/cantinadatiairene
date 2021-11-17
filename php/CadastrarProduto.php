<?php

session_start();
include_once ("connect.php");

$valor_produto = $_POST["valor"];
$nome_produto = $_POST["nome"];
$quantidade = $_POST["quantidade"];


$inserir = $strcon -> query("INSERT INTO produto (valor_produto, nome_produto, quantidade) VALUES ('$valor_produto', '$nome_produto', '$quantidade')");

if (!$inserir){
    die("Falha na inserção");
}
else{
    header("Location: ../paginas/indexProdutos.php");
}

?>

