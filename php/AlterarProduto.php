<?php

// conexão com o banco de dados 
session_start();
include_once ("connect.php");

//Atualizar o Produto

//para buscar os dados para serem alterados 

if( isset($_POST["nome"])){
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];
    $idproduto = $_POST["idproduto"];

    $sql = "UPDATE produto SET nome_produto = '{$nome}', quantidade = {$quantidade}, valor_produto = {$valor} WHERE id_produto = {$idproduto}";

    $alteracao = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");
    
    if(!$alteracao){
        die("deu ruim carai");
    }else{
        header("location:../paginas/indexProdutos.php");
    }
 }
?>