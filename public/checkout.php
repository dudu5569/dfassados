<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout D&F</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="bodycheckout">
<div id="finalizar">
        <h1 id="checktitle">Checkout</h1>

    <div id="lista-carrinho"></div>


    <div id="finalizarpedido">
        <h3>Forma de pagamento</h3>
        <select id="pagamento">
            <option value="">Selecione</option>
            <option value="Dinheiro">Dinheiro</option>
            <option value="Cartão">Cartão</option>
            <option value="Pix">Pix</option>
        </select>

        <h3>Tipo de pedido</h3>
        <select id="tipo-pedido">
            <option value="">Selecione</option>
            <option value="1">Entrega</option>
            <option value="2">Retirada</option>
        </select> <br>

<div id="endereco-box">
    <h3>Endereço</h3>
    <input type="text" id="endereco" placeholder="Digite seu endereço">
</div> <br> <br>



        <button>Finalizar Pedido Por WhatsApp</button>
        <button>Cancelar</button>
</div>
</div>




<script src="js/scriptcarrinho.js"></script>
</body>
</html>