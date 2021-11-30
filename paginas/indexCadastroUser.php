<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/txtico.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleValores.css">
    <script src="https://kit.fontawesome.com/b1a188d194.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?php session_start()?>
    
    <title>Cantina Da Tia Irene</title>
</head>
<ul style="margin-left:85%;  color: #560858; font-weight: bold;background-color: #2e2f31; width: 50px; height: 25px; ">
    <li id="selecionado">
        <a class="btn btn-danger" href="../php/logout.php">Sair</a>
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
						    <form action="../php/cadastraUser.php" method="POST" class="box">							
							    <div class="field">
								    <h1 class="titleLogin">Cadastrar Usuário</h1>
                                    <label>Nome: </label>
                                    <input type="Text" placeholder="Digite seu Nome" class="input" name="nome" required>
                                    <label>Sobrenome: </label>
                                    <input type="Text" placeholder="Digite seu Sobrenome" class="input" name="sobrenome" required>
                                    <label>Email: </label>
                                    <input type="email" placeholder="Digite seu e-mail" class="input" name="email" required>
                                    <label>Senha: </label>
                                    <input type="password" placeholder="*******" class="input" name="senha" required>
							    </div>				
							    <div class="field">
							        <button class="button is-success">
								        Cadastrar
							        </button>
							    </div>
							</div>
						    </form>
						</div>
					</div>
				</div>
			</div>
		</div>
    <?php                                     
	 if(isset($_SESSION['Cadastro'])){
     echo $_SESSION['Cadastro'];
     }
     ?>
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
</body>
</html>