<?php
/*Código de validação de usuário */
include_once 'connect.php'; /*Conexão ao banco*/
if(empty($_POST['email']) || empty($_POST['senha'])){
    echo "Preencha os Campos corretamente";
}

else{   
    $emailLogin = $_POST['email'];
    $senhaLogin = $_POST['senha'];
    //$senha = md5($senha);

    $validacaoLogin =  "SELECT * FROM usuarios WHERE email = '$emailLogin' and senha = '$senhaLogin'";

    $resultadovalidacao=mysqli_query($strcon, $validacaoLogin);
    $resultado = mysqli_fetch_array($resultadovalidacao);
    session_start();
    $_SESSION['emailusuario'] = $resultado['email'];
    $_SESSION['senhausuario'] = $resultado['senha'];
    

    
    if ($resultado){
    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['email'] = $resultado['email'];
    header("Location:../paginas/principal.html");    
    }

    else{
        $_SESSION['loginErro'] = "Usuário ou senha Inválido. <br> <strong>Digite os Dados Corretamente</strong>";
        header("Location: ../index.php");
    }
}
    

    
    
   
    ?>