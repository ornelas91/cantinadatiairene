<?php

header("location:../paginas/indexCaixa.php");

session_start();
include_once ("connect.php");


$sql = "SELECT nome_produto, valor_produto FROM produto ";

if( isset($_GET["codigo"])){
$id = $_GET["codigo"];      //$id recebendo parametro passado pelo id ao clicar no botao alterar 
    $sql .= " WHERE  id_produto = {$id}";
}else{
    header("location:../paginas/indexCaixa.php");
}

$resultado = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");




?>