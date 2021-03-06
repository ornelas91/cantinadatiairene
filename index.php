<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/txtico.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/b1a188d194.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Cantina Da Tia Irene</title>
    <?php
    session_start();
    ?>
</head>
<section class="section">
    <div class="container">
        <h1 class="title has-text-centered">Cantina Da Tia Irene</h1>
        <div class="columns is-centered">
            <div class="column is-grouped">
                <div class="hero-body">
                    <div class="container">
                        <div class="columns is-centered">
                            <div class="column is-5-tablet is-4-desktop is-30-widescreen">
                                <form action="php/validaLogin.php" class="box" method="POST">
                                    <div class="field">
                                        <h1 class="titleLogin">Login</h1>
                                        <label for="" class="has-text-centered">E-mail</label>
                                        <div class="control has-icons-left">
                                            <input type="email" placeholder="Digite seu e-mail" class="input" name="email" required>
                                            <span class="icon is-small is-left">
								  <i class="fa fa-envelope"></i>
								</span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="has-text-centered">Senha</label>
                                        <div class="control has-icons-left">
                                            <input type="password" placeholder="*******" class="input" name="senha" required>
                                            <span class="icon is-small is-left">
								  <i class="fa fa-lock"></i>
								</span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="" class="checkbox">
								<input type="checkbox">
							   Lembrar-me
							  </label>
                                    </div>
                                    <div class="field">
                                        <button class="button is-success">
								Login
							  </button>
                                        <div class="field">
                                            <div>
                                                N??o tem cadastro? <a href="./paginas/indexCadastroUser.php">Cadastar</a>
                                            </div>
                                            <div>
                                                <a href="#">Esqueceu a senha?</a>
                                            </div>
                                        </div>
										
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                <?php 
			                                    
			        if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                    }
                ?>
				</div>
            </div>
        </div>
    </div>
</section>
<!--Rodap??-->
<footer class="rodape bgGradient">
    <div class="socialIcons">
        <h1 class="tsocial">Redes Sociais</h1><br/>
        <a href="https://www.facebook.com/ornelas91" target="_blank"><i class="fab fa-facebook-f" title="Facebook"></i></a>
        <a href="https://www.instagram.com/ornelasalmeida/" target="_blank"><i class="fab fa-instagram" title="Instagram"></i></a>
        <a href="https://wa.me/55119" target="_blank"><i class="fab fa-whatsapp" title="Whatssapp"></i></a>
        <a href="mailto:anderson_ornelas91@hotmail.com?subject=Ol??"><i class="fas fa-envelope" title="E-mail"></i></a>
    </div>
    <p class="direitos">Copyright ?? Cantina da tia irene 2021. </p><br><br>
</footer>
<script src=".js"></script>
</body>
</html>