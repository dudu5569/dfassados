<?php
$id_produto = $_POST['id_produto'];
include_once '../classes/listar_produtos.php';

$produto = new Listar_proudutos();

$itens = $produto->listarprodutoparaeditar($id_produto);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body id="bodyformedit">
<div id="formeditarproduto">
        <form id="formularioeditarproduto" action="comandos_admin/editar_produtos.php" method="post" enctype="multipart/form-data">
        <label for="">Trocar Imagem?</label> <br> 
        <select name="" id="trocarimg" class="selectproduto" required>
            <option value="1">Sim</option>
            <option value="2">Não</option>
        </select> <br> <br>

        <input type="hidden" name="id_produto" value="<?= $itens['id'] ?>">

        <label for="">Nome do Produto</label> <br>
        <input type="text" name="nomeproduto" id="nomeproduto" required value="<?= $itens['descricao'] ?>"> <br> <br>

        <label for="">Preço</label><br>
        <input type="number" name="precoproduto" id="precoproduto" step="0.01" min="0" required value="<?= $itens['preco'] ?>"> <br><br>


        <label for="">Destaque</label><br>
        <select name="destaqueproduto" class="selectproduto">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select> <br><br>

        <label for="">Categoria</label><br>
        <select name="nomecategoria" class="selectproduto">
            <option value="1">Assados</option>
            <option value="2">Bebidas</option>
        </select> <br><br>

        
        <input type="file" accept="image/*" src="" name="imagem" id="arquivo" alt="" required> <br><br>
        <input type="hidden" name="imagem_atual" value="<?= $itens['imagem'] ?>">

        <img src="../img/<?= $itens['imagem'] ?>" alt="" id="preview" width="200px"> <br> <br>

        
        <button id="removeimg" type="button" class="buttonform">Remover Imagem</button>
        <button type="button" id="limparform" class="buttonform">Limpar Formulário</button>
        <button type="submit" id="enviarform" class="buttonform">Enviar Alterações</button>
    </form>
</div>




<script src="../public/js/script.js"></script>
</body>
</html>