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

    <div id="nomecliente">
        <label for="">Nome:</label>
        <input type="text" name="nomecliente" id="nomecli">
    </div>
    <div id="finalizarpedido">
        <h3>Forma de pagamento</h3>
        <select id="pagamento">
            <option value="1">Dinheiro</option>
            <option value="2">Cartão</option>
            <option value="3">Pix</option>
        </select> <br>

        <h4 class="ocultarchave" id="chavepix" >Chave pix: dfassados@gmail.com <br>
            Nome: João Brauna
        </h4>


        <h3>Tipo de pedido</h3>
        <select id="tipo-pedido">
            <option value="2">Retirada</option>
            <option value="1">Entrega</option>
        </select> <br>

<div id="endereco-box">
    <h3>Endereço</h3>
    <input type="text" id="endereco" placeholder="Ex: Rua onde moro 100">
</div> <br> <br>



        <button id="finalizarwpp" >Enviar Pedido Por WhatsApp</button>
        <button id="cancelarpedido" >Cancelar</button>
</div>
</div>




<script src="js/scriptcarrinho.js"></script>
</body>
</html>