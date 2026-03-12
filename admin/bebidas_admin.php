<?php
 include_once '../classes/listar_produtos.php';
 $lista = new Listar_proudutos();
 $tabela_bebidas = $lista->listar_bebidas();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opções Bebidas D&F</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
<?php include 'cabecalho_admin.php';?>
<div id="titleprodutos">
    <h1>Bebidas</h1>
</div>
<?php foreach($tabela_bebidas as $linha): ?>
<div class="acoesprodutos">    
    <form class="formopcoesbebidas" method="post">
    <div class="opcoeshide">
        <input type="hidden" name="id_produto" value="<?= $linha['id']?>">
    </div>
        <div class="produtosopcoes">
            <img id="imagemopcaoproduto" src="../img/<?= $linha['imagem'] ?>" alt="" srcset="">
        </div>
        <div class="produtosopcoes">
            <h3>
                <?= $linha['descricao'] ?>
            </h3>
        </div>
        <div class="produtosopcoes">
            <h2>
                R$<?= $linha['preco'] ?>
            </h2>
        </div>
        <div class="produtosopcoesbotoes">
            <div class="botaoopcoes">
                <button id="botaoopcoeseditar" formaction="editar_produto.php">Editar ✏️</button>
            </div>
            
            <div class="botaoopcoes">
                <button id="botaoopcoexcluir" formaction="excluir_bebidas.php">Excluir 🗑️</button>
            </div>
        </div>
    </form>
</div>
<?php endforeach; ?>




</body>
</html>