<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Produtos D&F</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body id="bodyformedit">
<div id="formeditarproduto">
        <form id="formularioeditarproduto" action="comandos_admin/inserir_produtos.php" method="post" enctype="multipart/form-data">

        <label for="">Nome do Produto</label>
        <input type="text" name="nomeproduto" id="nomeproduto" required value=""> <br>

        <label for="">Preço</label>
        <input type="number" name="precoproduto" id="precoproduto" step="0.01" min="0" required value=""> <br>


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
        <input type="hidden" name="imagem_atual" value="">

        <img src="" alt="" id="preview" width="200px"> <br> <br> <br>

        
        <button id="removeimg" type="button">Remover Imagem</button>
        <button type="button" id="limparform">Limpar Formulário</button>
        <button type="submit">Inserir Produto</button>
        <button type="button" onclick="window.location.href='administrativo.php'">Menu Principal</button>
    </form>
</div>


<script src="../public/js/script.js"></script>
</body>
</html>