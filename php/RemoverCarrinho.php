<?php

header("location:../paginas/indexCaixa.php");

// conexão com o banco de dados 
session_start();
include_once ("connect.php");

$sql = "DELETE FROM vendas ";

if( isset($_GET["produto"])){
$id = $_GET["produto"];      //$id recebendo parametro passado pelo id ao clicar no botao deletar
    $sql .= " WHERE  id_venda = {$id}";
}else{
    header("location:../paginas/indexCaixa.php");
}

$resultado = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");

?>