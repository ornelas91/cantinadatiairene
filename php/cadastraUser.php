<?php
include_once 'connect.php'; /*Conexão ao banco*/

$nomeLogin = $_POST['nome'];
$sobreLogin = $_POST['sobrenome'];
$emailLogin = $_POST['email'];
$senhaLogin = $_POST['senha'];

if($senhaLogin <= 3){
    $_SESSION['mensagem'] =  "Senha muito pequena!";
}
else{
$res = $strcon->query("INSERT INTO usuarios(email,senha,nome,sobrenome) Values ('$emailLogin','$senhaLogin' ,'$nomeLogin','$sobreLogin')");
mysqli_set_charset($strcon,"utf8");
}
    if($res){
        header("Location: ../index.php");
        $_SESSION['mensagem'] =  "Dados Cadastrados";
       
    }
    else{
        header("Location: ../paginas/indexCadastroUser.php");
        $_SESSION['mensagem'] =  "Falha no Cadastro";
    }



?>