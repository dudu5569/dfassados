<?php
include_once '../classes/listar_produtos.php';
$lista = new Listar_proudutos();
$tabela_bebidas = $lista->listar_bebidas_destaque();

$tabela_frango = $lista->listar_frangos_destaque();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Casa de Assados</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
  <?php include 'cabeçalho.php';?>

<div class="cart-container">
    <header>
      <div class="cart-title">Carrinho de Compras</div>
      <div class="icon-cart">
      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
      </svg>
      <span>0</span>
    </div>
  </header>
    <div id="assados">
        <div id="titleprodutos">
          <h1>Assados em Destaque</h1>
        </div>
    <div class="container">
      <div class="row">
        <?php foreach ($tabela_frango as $linha): ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card h-100">

              <img class="img_produto card-img-top"
                  src="../img/<?= $linha['imagem'] ?>" 
                  alt="" height="200">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $linha['descricao'] ?></h5>
                <p class="card-text">R$ <?= $linha['preco'] ?></p>
                <a class="btn btn-success mt-auto addcarrinho">
                  Adicionar ao Carrinho
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    </div>
  
<br><br><br><br>

    <div id="bebidas">
      <div id="titleprodutos">
        <h1>Bebidas em Destaque</h1>
      </div>
  <div class="container">
    <div class="row">
      <?php foreach ($tabela_bebidas as $linha): ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="card h-100">

            <img class="img_produto card-img-top"
                src="../img/<?= $linha['imagem'] ?>" 
                alt="" height="200">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?= $linha['descricao'] ?></h5>
              <p class="card-text">R$ <?= $linha['preco'] ?></p>
              <a class="btn btn-success mt-auto addcarrinho">
                Adicionar ao Carrinho
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  </div>

</div>

<div class="janelacarrinho">
  <h1>Carrinho</h1>

  <div class="listacompras">
        
  </div>

  <div class="botoescarrinho">
    <button class="close">Fechar</button>
    <button class="checkout">Concluir Pedido</button>
  </div>
</div>



<div id="linha"></div>

<script src="js/scriptcarrinho.js"></script>
<?php include 'rodape.php';   ?>
</body>

</html>