<?php

header("location:../paginas/indexCaixa.php");

// conexão com o banco de dados 
session_start();
include_once ("connect.php");

$sqli = "SELECT id_produto FROM vendas ";

if( isset($_GET["produto"])){
    $id = $_GET["produto"];      //$id recebendo parametro passado pelo id ao clicar no botao alterar 
    $sqli .= " WHERE  id_venda = {$id}";
}

$resultado = mysqli_query($strcon, $sqli) or die ("erro ao tentar se conectar com banco");

$linhas = mysqli_fetch_assoc($resultado);

$idProdvenda = $linhas["id_produto"];

$stmt = "SELECT id_produto, nome_produto, valor_produto, quantidade FROM produto ";

if($resultado != null){
    $stmt .= " WHERE  id_produto = {$idProdvenda}";
}

$consul = mysqli_query($strcon, $stmt) or die ("erro ao tentar se conectar com banco");

$linha = mysqli_fetch_assoc($consul);

$cont = 1;
$idprod = $linha["id_produto"];
$nome = $linha["nome_produto"];
$valor = $linha["valor_produto"];
$quantidade = $linha["quantidade"] + $cont;

$sql = "DELETE FROM vendas ";

if( isset($_GET["produto"])){
    $id = $_GET["produto"];      //$id recebendo parametro passado pelo id ao clicar no botao deletar
    $sql .= " WHERE  id_venda = {$id}";
    
    $sqll = "UPDATE produto SET nome_produto = '{$nome}', quantidade = {$quantidade}, valor_produto = {$valor} WHERE id_produto = {$idprod}";

    $alteracao = mysqli_query($strcon, $sqll) or die ("erro ao tentar se conectar com banco");

    $cont ++;
}else{
    header("location:../paginas/indexCaixa.php");
}

$result = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");  

?>