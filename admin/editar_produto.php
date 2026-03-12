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
</head>
<body id="bodyformedit">
<div id="formeditarproduto">
        <form id="formularioeditarproduto" action="comandos_admin/editar_produtos.php" method="post" enctype="multipart/form-data">
        <label for="">Trocar Imagem?</label>
        <select name="" id="trocarimg" required>
            <option value="1">Sim</option>
            <option value="2">Não</option>
        </select> <br>

        <input type="hidden" name="id_produto" value="<?= $itens['id'] ?>">

        <label for="">Nome do Produto</label>
        <input type="text" name="nomeproduto" id="nomeproduto" required value="<?= $itens['descricao'] ?>"> <br>

        <label for="">Preço</label>
        <input type="number" name="precoproduto" id="precoproduto" step="0.01" min="0" required value="<?= $itens['preco'] ?>"> <br>


        <label for="">Destque</label>
        <select name="destaqueproduto" id="">
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select> <br>

        <label for="">Categoria</label>
        <select name="nomecategoria" id="">
            <option value="1">Assados</option>
            <option value="2">Bebidas</option>
        </select> <br>

        
        <input type="file" accept="image/*" src="" name="imagem" id="arquivo" alt="" required> <br>
        <input type="hidden" name="imagem_atual" value="<?= $itens['imagem'] ?>">

        <img src="../img/<?= $itens['imagem'] ?>" alt="" id="preview" width="200px"> <br> <br> <br>

        
        <button id="removeimg" type="button">Remover Imagem</button>
        <button type="button" id="limparform">Limpar Formulário</button>
        <button type="submit">Enviar Alterações</button>
    </form>
</div>




<script src="../public/js/script.js"></script>
</body>
</html>