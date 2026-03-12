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

<body>
  <?php include 'cabeçalho.php';?>

  
  <div id="assados">
    <div id="titleprodutos">
      <h1>Assados em Destaque</h1>
    </div>
<div class="container">
  <div class="row">
    <?php foreach ($tabela_frango as $linha): ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card h-100">
          <img class="img_produto card-img-top img-fluid"
               src="../img/<?= $linha['imagem'] ?>" 
               alt="" height="200">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $linha['descricao'] ?></h5>
            <p class="card-text">R$ <?= $linha['preco'] ?></p>
            <a href="#" class="btn btn-success mt-auto">
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
            <a href="#" class="btn btn-success mt-auto">
              Adicionar ao Carrinho
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>

<div id="linha"></div>

<?php include 'rodape.php';   ?>
</body>

</html>