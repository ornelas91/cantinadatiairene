<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/txtico.png">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Login</title>
    <?php
    session_start();
    ?>

</head>
<body>
        <div class="containerStyle">
            <h2>Login</h2>
            <form action="php/validaLogin.php" class="box" method="POST">
                <div class="field">
                        <div class="input-field">
                            <input type="email" placeholder="Digite seu e-mail" class="input" name="email" required>
                            <label for="email">Email:</label>
                        </div>
                </div>
                <div class="field">
                        <div class="input-field">
                            <input type="password" placeholder="Digite sua senha" class="input" name="senha" required>
                            <label for="senha">Senha:</label>
                        </div>
                </div>
                <div class="center">
                    <button class="button is-success">Login</button>
            </form>

            <div class="links">
                <a href="./paginas/indexNovaSenha.php"><p>Esqueci minha senha</p></a>
                <a href="./paginas/indexCadastroUser.php"><p>Cadastrar</p></a>
            </div>           
        </div>

        <?php                                     
		    if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }
        ?>

</body>
</html>