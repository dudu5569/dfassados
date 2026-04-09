<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

  <button class="navbar-toggler" type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" 
             role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Opções
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="administrativo.php">Menu Principal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="assados_admin.php">Assados</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="bebidas_admin.php">Bebidas</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" 
             role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inserir
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="inserir_produtos.php">Inserir Produtos</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="../public/js/bootstrap.bundle.js"></script>
</body>
</html>
