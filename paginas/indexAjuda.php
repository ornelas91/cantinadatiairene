<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/txtico.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/b1a188d194.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                <!--Menu-->
                <nav class="menu">
                    <ul>
                        <li><a href="./indexHome.html">Home</a></li>
                        <li><a href="./indexProdutos.php">Produtos</a></li>
                        <li><a href="./indexCadastro.php">Cadastrar</a></li>
                        <li id="selecionado"><a href="./indexAjuda.php">Ajuda</a></li>
                        <li><a href="./indexCaixa.php">Caixa</a></li>
                    </ul>
                </nav>
                <div class="row mx-md-n5">
                  <div class="col py-3 px-md-5 border bg-light">
                    <h1  class="titleLogin">Suporte</h1>
                    <form method="POST" action="https://formspree.io/f/mvoddkrd" target="_blank" class="was-validated">
                      <div class="mb-3 textoE">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="nome" id="name" required>                        
                      </div>
                      <div class="mb-3 textoE">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="text" name="Email" id="email" required>                        
                      </div>
                      <div class="mb-3 textoE">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control is-invalid" name="mensagem" id="message" rows="4" required></textarea></textarea>                        
                      </div>
                      <button class="textoE button is-success">
                        Enviar
                      </button>
                    </form>   
                  </div>

                    <div class="col py-3 px-md-5 border bg-light">
                        <img src="../img/suporte.png" alt="">
                        <h1 class="tSuporte">Telefone: 11 964646464</h1>
                        <h1 class="tSuporte">Email: cantinatiairene@hotmail.com</h1>
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
        <a href="mailto:cantinatiairene@hotmail.com?subject=Olá"><i class="fas fa-envelope" title="E-mail"></i></a>
    </div>
    <p class="direitos ">Copyright © Cantina da tia irene 2021. </p><br><br>
</footer>
<script src=".js"></script>
</body>
</html>