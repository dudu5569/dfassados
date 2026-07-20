<?php
include_once '../config/connn.php';
include_once '../classes/verificar_sessao.php';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativo</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body id="paineladmin">

<div id="textabove">
    <h1 id="textpainel">Painel Administrativo D&F Assados</h1>
    <h1 id="textpainel">Bem vindo <?= $_SESSION['usuario_nome'] ?>!</h1>
</div>

<div id="ajustarbotoes">
    <div id="gerenciarassados" class="paineladmin">
    <p>Gerenciar Assados</p>
</div>
<div id="gerenciarbebidas" class="paineladmin" >
    <p>Gerenciar Bebidas</p>
</div>
<div id="inserirproduto" class="paineladmin">
    <p>
        Inserir Novo Produto
    </p>
</div>
<div id="encerrarsessao" class="paineladmin">
    <p>
        Encerrar Sessão
    </p>
</div>
</div>

<script src="../public/js/script_painel_admin.js"></script>
</body>
</html>