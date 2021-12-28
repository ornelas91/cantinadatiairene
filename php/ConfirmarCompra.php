<?php
// conexão com o banco de dados 
session_start();
include_once ("connect.php");

$sql = "TRUNCATE TABLE vendas ";

$resultado = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");

header("location:../paginas/indexCaixa.php");
?>