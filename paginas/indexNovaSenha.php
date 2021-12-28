<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/txtico.png">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <title>Nova Senha</title>

    <?php
    session_start();
    ?>

</head>
<<<<<<< HEAD
<ul style="margin-left:85%;  color: #560858; font-weight: bold;background-color: #2e2f31; width: 50px; height: 25px; ">
    <li id="selecionado">
        <a class="btn btn-danger" href="../index.php">Inicio</a>
    </li>
</ul>
<section class="section">
    <div class="container">
        <h1 class="title has-text-centered">Cantina Da Tia Irene</h1>
        <div class="columns is-centered">
            <div class="column is-grouped">  
	            <div class="container">
			        <div class="column is-grouped">
					    <div class="columns is-centered">
						    <div class="column is-5-tablet is-4-desktop is-30-widescreen">							
						    <form action="../php/AlterarSenha.php" method="POST" class="box">							
							    <div class="field">
								    <h1 class="titleLogin">Nova Senha</h1>
                                    <label>Email: </label>
                                    <input type="email" placeholder="Digite seu e-mail" class="input" name="email" required>
                                    <label>Nova Senha: </label>
                                    <input type="password" placeholder="*******" class="input" name="novasenha" required>
							    </div>				
							    <div class="field">
							        <button class="button is-success">
								        Atualizar
							        </button>
							    </div>
							</div>
						    </form>
                            <?php                       
                                if(isset($_SESSION['Erro'])){
                                echo $_SESSION['Erro'];
                                unset($_SESSION['Erro']);
                                }
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    <!--Rodapé-->
    <footer class="rodape bgGradient">
        <div class="socialIcons">
            <h1 class="tsocial">Redes Sociais</h1><br/>
            <a href="#" target="_blank"><i class="fab fa-facebook-f" title="Facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram" title="Instagram"></i></a>
            <a href="https://wa.me/55119" target="_blank"><i class="fab fa-whatsapp" title="Whatssapp"></i></a>
            <a  href="mailto:cantinatiairene@hotmail.com?subject=Olá"><i class="fas fa-envelope" title="E-mail"></i></a>
        </div>
        <p class="direitos ">Copyright © Cantina da tia irene 2021. </p><br><br>
    </footer>
    <script src=".js"></script>
=======
<body>							
        <div class="containerStyle">
            <h2>Alterar Senha</h2>
            <form action="../php/AlterarSenha.php" method="POST" class="box">
                <div class="field">
                        <div class="input-field">
                            <input type="email" placeholder="Digite seu e-mail" class="input" name="email" required>
                            <label>Email: </label>
                        </div>
                </div>
                <div class="field">
                        <div class="input-field">
                            <input type="password" placeholder="*******" class="input" name="novasenha" required>
                            <label>Nova Senha: </label>
                        </div>
                </div>
                <div class="center">
                    <button class="button is-success">Cadastrar</button>
            </form>
                            
    <?php                       
        if(isset($_SESSION['Erro'])){
        echo $_SESSION['Erro'];
        unset($_SESSION['Erro']);
        }
    ?>

>>>>>>> 7ed0d19709dafa0f25051e2f123d4c0f61945302
</body>
</html>