<?php
session_start();
include_once ("connect.php");

if( isset($_GET["pegar"])){
    $id = $_GET["pegar"];      
}

$stmts = "SELECT SUM(valor_venda) AS total FROM vendas ";
$result = mysqli_query($strcon, $stmts) or die ("erro ao tentar se conectar com banco");
$linhas = mysqli_fetch_assoc($result);
$tot = $linhas["total"];

$stmt = "SELECT id_venda, produto_venda, valor_venda, quantidade FROM vendas ";
$result = mysqli_query($strcon, $stmt) or die ("erro ao tentar se conectar com banco");
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
    <div>
        <div>
            <div >
                <h1 class="titleLogin">Dados da compra</h1></br>
			<div >
            <center><table width = "570" cellpadding = "0" cellspacing = "0" border = "1">
                <tr>
                    <td class="col py-3 px-md-5 border bg-light"><b> Produto </b></td>                    
                    <td class="col py-3 px-md-5 border bg-light"><b> Valor </b></td>
                    <td class="col py-3 px-md-5 border bg-light"><b> Quantidade </b></td>
                </tr>
                <?php
                    while($linha = mysqli_fetch_assoc($result)) {   
                ?>
                    <tr>
                        <td class="col py-3 px-md-5 border bg-light"><?php echo $linha["produto_venda"] ?></td>
                        <td class="col py-3 px-md-5 border bg-light">R$<?php echo $linha["valor_venda"] ?></td>
                      <td class="col py-3 px-md-3 border bg-light">Un <?php echo $linha["quantidade"] ?></td>          
                    </tr>
                <?php
                    }
                ?>
            <center></table>
            <section class="section">
                <center><table width = "570" cellpadding = "0" cellspacing = "0" border = "1">
                    <tr>
                        <td class=" col py-3 px-md-5 border bg-light"><b><center>Forma de pagamento: <?php echo $id ?></td>
                    </tr>
                    <tr>
                        <td class=" col py-3 px-md-5 border bg-light"><b><center>Total a pagar: R$ <?php echo $tot ?></td>
                    </tr>
                <center></table>
            </section>                          
        </div>
    </div>
    <a onclick="return alert('Pedido realizado com sucesso!')" type="button" class="btn btn-danger"  href="ConfirmarCompra.php">Finalizar pedido</a> 
    <button class="textoE button is-success" onclick="window.location.href='../paginas/indexCaixa.php'">Voltar ao Caixa</button>                       
</section>   
    <!--Rodap??-->
<footer class="rodape bgGradient">
    <div class="socialIcons">
        <h1 class="tsocial">Redes Sociais</h1><br/>
        <a href="#" target="_blank"><i class="fab fa-facebook-f" title="Facebook"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram" title="Instagram"></i></a>
        <a href="https://wa.me/55119" target="_blank"><i class="fab fa-whatsapp" title="Whatssapp"></i></a>
        <a  href="mailto:cantinatiairene@hotmail.com?subject=Ol??"><i class="fas fa-envelope" title="E-mail"></i></a>
    </div>      
    <p class="direitos ">Copyright ?? Cantina da tia irene 2021. </p><br><br>
</footer>
<script src=".js"></script>  
</body>
</html>