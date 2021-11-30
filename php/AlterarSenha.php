<?php
    // conexão com o banco de dados 
    include_once ("connect.php");

    //Atualizar senha
    //para buscar os dados para serem alterados 
    $email = $_POST["email"];
    $novasenha = $_POST["novasenha"];
    $select =  sprintf("SELECT * FROM usuarios WHERE email = '$email'");

    $res=mysqli_query($strcon, $select)or die ("erro ao tentar se conectar com banco");
    $resultado = mysqli_fetch_array($res);
    if(mb_strlen($novasenha)<=3){
    $_SESSION['Erro'] = "<strong>Digite uma Senha maior que 4 Caracteres <br></strong>";    
    header("Location: ../paginas/indexNovaSenha.php");
    }
    else{
    if ($resultado){
        $sql = "UPDATE usuarios SET senha = '$novasenha' WHERE email = '$email'";
    $alteracao = mysqli_query($strcon, $sql) or die ("Error");
    
        if($alteracao){
            $_SESSION['loginErro'] = "Senha Alterada com Sucesso, entre com suas novas crendenciais</strong>";
        header("Location: ../index.php");
        }else{
            $_SESSION['Erro'] = "Usuário ou senha Inválido. <br> <strong>Digite os Dados Corretamente</strong>";
            header("Location: ../paginas/indexNovaSenha.php");
        }
    }
} 
?>