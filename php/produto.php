<?php
include_once 'connect.php';
include_once 'mysqlexecuta.php';

    // conecta ao banco de dados
    strcon = mysql_pconnect($server, $user, $password) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($bd, $strcon);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM produto");
// executa a query
$dados = mysql_query($query, $strcon) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);

echo "e agr fdp?";

header("Location: ../paginas/indexProdutos.php");

?>