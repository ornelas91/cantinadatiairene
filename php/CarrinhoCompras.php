<?php

header("Location: ../paginas/indexProdutos.php");

session_start();
include_once ("connect.php");

//pegando o item selecionado

$sql = "SELECT id_produto, nome_produto, valor_produto, quantidade FROM produto ";

if( isset($_GET["codigo"])){
    $id = $_GET["codigo"];      //$id recebendo parametro passado pelo id ao clicar no botao adicionar 
    $sql .= " WHERE  id_produto = {$id}";
}

$resultado = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");

$linhas = mysqli_fetch_assoc($resultado);

$cont = 1; //contador para adiconar quantidades de itens

// adicionando o valor dos itens do banco em variaveis 

$id = $linhas["id_produto"];
$nome = $linhas["nome_produto"];
$valor = $linhas["valor_produto"];
$quantidade = $linhas["quantidade"] - $cont; //Para controlar a quantidade a ser diminuida
$qtd = 1;

if($quantidade < 0){
    echo"erooo";
}else{

if ( isset($_GET["codigo"])){
    //Para adiconar ao carrinho um item 
    $stmt = $strcon -> query("INSERT INTO vendas (id_produto, produto_venda, valor_venda, quantidade) VALUES ('$id', '$nome', '$valor', '$qtd')");

    //Para alterar o item e mudar a quantidade no banco quando for adicionado um item
    $sql = "UPDATE produto SET nome_produto = '{$nome}', quantidade = {$quantidade}, valor_produto = {$valor} WHERE id_produto = {$id}";
    $alteracao = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");

    $cont ++; //usado para acrescentar uma quantidade sempre que um item foi inserido 
}else{
    header("Location: ../paginas/indexProdutos.php");
}
}
?>