<?php

header("Location: ../paginas/indexProdutos.php");

session_start();
include_once ("connect.php");

$sql = "SELECT id_produto, nome_produto, valor_produto, quantidade FROM produto ";

if( isset($_GET["codigo"])){
    $id = $_GET["codigo"];      //$id recebendo parametro passado pelo id ao clicar no botao alterar 
    $sql .= " WHERE  id_produto = {$id}";
}

$resultado = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");

$linhas = mysqli_fetch_assoc($resultado);

$id = $linhas["id_produto"];
$nome = $linhas["nome_produto"];
$valor = $linhas["valor_produto"];
$qtd = 1;



if ( isset($_GET["codigo"])){
    $stmt = $strcon -> query("INSERT INTO vendas (id_produto, produto_venda, valor_venda, quantidade) VALUES ('$id', '$nome', '$valor', '$qtd')");
}else{
    header("Location: ../paginas/indexProdutos.php");
}

?>