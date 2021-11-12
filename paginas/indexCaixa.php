<?php

session_start();
include_once ("../php/connect.php");

//para buscar os dados para serem alterados 

// Os dados são buscados de forma em que eles são mostrados nos campos para alterar os mesmos da melhor forma, sem problemas de confusão de dados

$sql = "SELECT nome_produto, valor_produto, quantidade FROM produto ";

if( isset($_GET["codigo"])){
    $id = $_GET["codigo"];      //$id recebendo parametro passado pelo id ao clicar no botao alterar 
    $sql .= " WHERE  id_produto = {$id}";
}else{
    
}

$resultado = mysqli_query($strcon, $sql) or die ("erro ao tentar se conectar com banco");

$linha = mysqli_fetch_assoc($resultado);

?>

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
    <link rel="stylesheet" href="../css/styleValores.css">
    <script src="https://kit.fontawesome.com/b1a188d194.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <title>Cantina Da Tia Irene</title>
</head>

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
                        <li><a href="./indexAjuda.php">Ajuda</a></li>
                        <li id="selecionado"><a href="indexCaixa.php">Caixa</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="row mx-md-n5">

        <div class="col py-3 px-md-5 border bg-light">
            <table class="col py-3 px-md-5 border bg-light">
                <tr>
                    <td>Produto:</td>                    
                    <td>Valor:</td>
                    <td>Quantidade:</td>
                </tr>
        <?php
                while($linha = mysqli_fetch_assoc($resultado)) {   
                   /* $nome = $linha*/
            ?>
                <tr>
                    <td class="col py-3 px-md-5 border bg-light"><?php echo $linha["nome_produto"] ?></td>
                    <td class="col py-3 px-md-5 border bg-light"> <?php echo $linha["valor_produto"] ?></td>
                    <td class="col py-3 px-md-3 border bg-light"><?php echo $linha["quantidade"] ?></td>
                    <td class="col py-3 px-md-3 border bg-light">
                        <!--<form action="indexCaixa.php" method="POST">
                            <input type="number" name="quantidade" value="1">
                        </form>-->
                        
                    </td>
                </tr>
             <?php
                }
            ?>  
            </table>
        </div>


        <div class="col py-3 px-md-5 border bg-light">

            <div class="col py-3 px-md-5 border bg-light">
                <h1 class="titleLogin">Total do Pedido</h1>
            </div>
            <div class="col py-3 px-md-5 border bg-light">
                <h1 class="titleLogin">R$</h1>
            </div>

            <div class="col py-3 px-md-5 border bg-light">
                <label for="validationTextarea">Forma de Pagamento: </label>
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04" aria-label="Exemplo de select com botão addon"> 
                  <option value="1">Dinheiro</option>
                  <option value="2">Cartão de Crédito</option>
                  <option value="3">Cartão de Débito</option>
                  <option value="4">Pix</option>
                  <option value="5">Vale Compra</option>
                </select>
                </div>
                </br>
            </div>
            <button class="textoE button is-success">
                Finalizar Pedido
              </button>

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