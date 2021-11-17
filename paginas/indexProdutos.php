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

<?php
 $server="localhost";
 $user="root";
 $password="usbw";
 $bd="TiaIrene";

 
$strcon = mysql_pconnect($server, $user, $password) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($bd, $strcon);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * FROM produto");
// executa a query
$dados = mysql_query($query, $strcon) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
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
                        <li><a  href="./indexHome.html">Home</a></li>
                                <li  id="selecionado"><a href="./indexProdutos.php">Produtos</a></li>
                                    <li><a href="./indexCadastro.php">Cadastrar</a></li> 
                                        <li><a href="./indexAjuda.php">Ajuda</a></li> 
                                            <li><a href="./indexCaixa.php">Caixa</a></li> 
                    </ul>
                </nav>                 
            </div>
        </div>
    </div>

    <div>
        <div>
            <div >
                <h1 class="titleLogin">Lista de Produtos</h1></br>

			<div >
<center><table  width = "900" cellpadding = "0" cellspacing = "0" border = "1">

    <tr>
    <td class="col py-3 px-md-5 border bg-light"> <b> Nome  </b> </td>
    <td class="col py-3 px-md-5 border bg-light"> <b> Valor  </b> </td>
    <td class="col py-3 px-md-5 border bg-light"> <b> Quantidade </b> </td>
    <td class="col py-3 px-md-5 border bg-light"> <b> Alterar </b> </td>
    <td class="col py-3 px-md-5 border bg-light"> <b> Deletar </b> </td>
    <td class="col py-3 px-md-5 border bg-light"> <b> Adiocionar ao caixa</b> </td>
    </tr>

    <?php
        /*require_once('/www/main/cantinadatiairene/php/produto.php');*/
        // se o número de resultados for maior que zero, mostra os dados
        if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
            do {
    ?>
        <tr>
        <td class="col py-3 px-md-5 border bg-light"><?=$linha['nome_produto']?></td> 
        <td class="col py-3 px-md-5 border bg-light">R$<?=$linha['valor_produto']?></td> 
        <td class="col py-3 px-md-5 border bg-light">Un <?=$linha['quantidade']?></td>
        <td class="col py-3 px-md-5 border bg-light"><a type="button" class="btn btn-warning" href="AlterarProdutos.php?codigo=<?php echo $linha["id_produto"] ?>">Alterar</a></td>
        <td class="col py-3 px-md-5 border bg-light"><a onclick="return confirm('Deseja Excluir?')" type="button" class="btn btn-danger"  href="../php/ExcluirProduto.php?codigo=<?php echo $linha["id_produto"] ?>">Deletar</a></td>
        <td class="col py-3 px-md-5 border bg-light"><a type="button" class="btn btn-warning"  href="../php/CarrinhoCompras.php?codigo=<?php echo $linha["id_produto"] ?>">Adicionar</a></td>
        </tr>
    <?php
            // finaliza o loop que vai mostrar os dados
            }while($linha = mysql_fetch_assoc($dados));
        // fim do if
        }
    ?>
    <?php
    // tira o resultado da busca da memória
    mysql_free_result($dados);
    ?>  
</center></table>  
</div>                               
        </div>
    </div>
    <button class="textoE button is-success" onclick="window.location.href='indexCaixa.php'">Ir para o Caixa</button>                         
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