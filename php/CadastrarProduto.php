<?php

session_start();
include_once ("connect.php");

$valor_produto = $_POST["valor"];
$nome_produto = $_POST["nome"];
$quantidade = $_POST["quantidade"];


$inserir = $strcon -> query("INSERT INTO produto (valor_produto, nome_produto, quantidade) VALUES ('$valor_produto', '$nome_produto', '$quantidade')");

if (!$inserir){
    die("Falha na inserção");
}
else{
    header("Location: ../paginas/indexProdutos.php");
}

/*
<?php
    $produtos = "SELECT id_produto, nome_produto, quantidade FROM produto";
    $linha_produtos = myqli_query($strcon, $produto);
    if (!linha_produtos){
        die("erro no banco");
    }
?>

<?php while($linha = mysqli_fecth_assoc($linha_produtos)) {?>
    <option value = "<?php echo $linha["id_produto"]; ?>">
        <?php echo $linha["nome"]; ?>
    </option>
<?php }?>
*/

?>

