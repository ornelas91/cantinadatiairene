<?php

header("location:../paginas/indexProdutos.php");

// conexão com o banco de dados 
session_start();
include_once ("connect.php");

$sql = "DELETE FROM produto ";

if( isset($_GET["codigo"])){
$id = $_GET["codigo"];      //$id recebendo parametro passado pelo id ao clicar no botao deletar
    $sql .= " WHERE  id_produto = {$id}";
}else{
    header("location:../paginas/indexProdutos.php");
}

$resultado = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");
?>