<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/txtico.png">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Cadastrar</title>

    <?php
    session_start();
    ?>

</head>
<body>
        <div class="containerStyle">
            <h2>Cadastrar</h2>
            <form action="../php/cadastraUser.php" method="POST" class="box">	
                <div class="field">
                        <div class="input-field">
                            <input type="Text" placeholder="Digite seu Nome" class="input" name="nome" required>
                            <label>Nome: </label>
                        </div>
                </div>
                <div class="field">
                        <div class="input-field">
                            <input type="Text" placeholder="Digite seu Nome" class="input" name="nome" required>
                            <label>Sobrenome: </label>
                        </div>
                </div>
                <div class="field">
                        <div class="input-field">
                            <input type="email" placeholder="Digite seu e-mail" class="input" name="email" required>
                            <label>Email: </label>
                        </div>
                </div>
                <div class="field">
                        <div class="input-field">
                            <input type="password" placeholder="*******" class="input" name="senha" required>
                            <label>Senha: </label>
                        </div>
                </div>
                <div class="center">
                    <button class="button is-success">Cadastrar</button>
            </form>
    <?php 
			                                    
	 if(isset($_SESSION['Cadastro'])){
     echo $_SESSION['Cadastro'];
     }
     ?>

</body>
</html>