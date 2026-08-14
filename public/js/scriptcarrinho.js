//script para o carrinho de compras

let iconecart = document.querySelector('.icon-cart');
let body = document.querySelector('body');
let botaofechar = document.querySelector('.close');
let botoes = document.querySelectorAll('.addcarrinho');
let lista = document.querySelector('.janelacarrinho .listacompras');
let qntd_carrinho = document.querySelector('.qntd_carrinho');
let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

document.addEventListener("DOMContentLoaded", () => {
    if (lista) renderizarCarrinho();
    if (qntd_carrinho) atualizarqntdcarrinho();

    carregarCheckout();
});


function salvarCarrinho(){
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
}

function atualizarqntdcarrinho(){
    qntd_carrinho.innerText = carrinho.length;
}

function aumentar(index){
    carrinho[index].quantidade++;
    renderizarCarrinho();
    salvarCarrinho();
}


function diminuir(index){
    if(carrinho[index].quantidade > 1){
        carrinho[index].quantidade--;
    }else{
        carrinho.splice(index, 1); // remove item
    }
    renderizarCarrinho();
    atualizarqntdcarrinho();
    salvarCarrinho();
}

function removerItem(index){
    carrinho.splice(index, 1);

    renderizarCarrinho();
    atualizarqntdcarrinho();
    salvarCarrinho();
}



if (iconecart) {
    iconecart.addEventListener('click', () =>{
        body.classList.toggle('mostrarcarrinho');
    });
}

if (botaofechar) {
    botaofechar.addEventListener('click', () =>{
        body.classList.toggle('mostrarcarrinho');
    });
}


function renderizarCarrinho() {
    lista.innerHTML = "";
    let total = 0;

    carrinho.forEach((item, index) => {
        let div = document.createElement('div');

        div.style.margin = "10px";
        div.style.padding = "10px";

       let preco = Number(item.preco);
        let quantidade = Number(item.quantidade);

        let subtotal = preco * quantidade;
        total += subtotal;


        div.innerHTML = `
            <strong>${item.nome}</strong><br>
            Preço: R$ ${item.preco.toFixed(2)}<br>
            
            <button id="aumentarqntd" onclick="diminuir(${index})">➖</button>
            ${item.quantidade}
            <button id="diminuirqntd" onclick="aumentar(${index})">➕</button>
            <button id="removeritem" onclick="removerItem(${index})">Remover Item</button>
            
            <br>Subtotal: R$ ${subtotal.toFixed(2)}
        `;

        lista.appendChild(div);
    });

    let totalDiv = document.createElement('div');
    totalDiv.innerHTML = `<h3>Total: R$ ${total.toFixed(2)}</h3>`;
    lista.appendChild(totalDiv);
}



botoes.forEach(botao => {
    botao.addEventListener('click', (e) =>{
        e.preventDefault();

        let card = botao.closest('.card');
        let nome = card.querySelector('.card-title').innerText;
        let preco = parseFloat(
        card.querySelector('.card-text').innerText
        .replace('R$', '')
        .replace(',', '.')
            );


        let produto = carrinho.find(p => p.nome === nome);

        if(produto){
            produto.quantidade++;
        }else{
            carrinho.push({
                nome: nome,
                preco: preco,
                quantidade: 1
            });
        }

        atualizarqntdcarrinho();
        renderizarCarrinho();
        salvarCarrinho();
    })
})




function carregarCheckout() {
    let container = document.getElementById("lista-carrinho");
    if (!container) return;

    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

    let total = 0;
    let html = "";

    carrinho.forEach(item => {
        let preco = Number(item.preco);
        let quantidade = Number(item.quantidade);

        let subtotal = preco * quantidade;
        total += subtotal;

        html += `
            <div>
                <h3>${item.nome}</h3>
                <p>Quantidade: ${quantidade}</p>
                <p>Preço: R$ ${preco.toFixed(2)}</p>
                <p>Subtotal: R$ ${subtotal.toFixed(2)}</p>
            </div>
            <hr>
        `;
    });

    html += `<h2>Total da compra: R$ ${total.toFixed(2)}</h2>`;

    container.innerHTML = html;
}

let formapedido = document.getElementById("tipo-pedido");

formapedido.addEventListener("change", () => {
    let valor = formapedido.value;
    let caixaendereco = document.getElementById("endereco-box");

    if (valor == "1") {
        caixaendereco.style.display = "block";
    } else {
        caixaendereco.style.display = "none";
    }
});

let formapagamento = document.getElementById("pagamento");

formapagamento.addEventListener("change", () =>{ 
    console.log("mudou", formapagamento.value);   
    let formapag = formapagamento.value;
    let chavepix = document.getElementById("chavepix");

    if(formapag == "3"){
        chavepix.classList.remove("ocultarchave");
    }else{
        chavepix.classList.add("ocultarchave");
    }
});


function enviarpedidowpp() {

    let nomecliente = document.getElementById("nomecli").value;

    let selectPagamento = document.getElementById("pagamento");
    let pagamento = selectPagamento.options[selectPagamento.selectedIndex].text;

    let selectTipo = document.getElementById("tipo-pedido");
    let tipoPedido = selectTipo.options[selectTipo.selectedIndex].text;

    let endereco = document.getElementById("endereco").value;

    let chavepixdf = document.getElementById("chavepix").innerText;

        if (!nomecliente) {
        alert("Digite seu nome!");
        nomeInput.focus();
        return;
    }

    if (tipoPedido === "Entrega" && !endereco) {
        alert("Digite o endereço para entrega!");
        enderecoInput.focus();
        return;
    }


    let mensagem = `*NOVO PEDIDO*\n\n`;
    mensagem += `Nome: ${nomecliente}\n\n`;

    mensagem += `*Itens:*\n`;

    let total = 0;

    carrinho.forEach(item => {
        let subtotal = item.preco * item.quantidade;
        total += subtotal;

        mensagem += `• ${item.nome}\n`;
        mensagem += `  Quantidade: ${item.quantidade}\n`;
        mensagem += `  Subtotal: R$ ${subtotal.toFixed(2)}\n\n`;
    });

    mensagem += `*Total: R$ ${total.toFixed(2)}*\n\n`;

    mensagem += `Pagamento: ${pagamento}\n`;
    if(pagamento == "Pix"){
        mensagem += `\n*Chave Pix:* dfassados@gmail.com\nNome: Eduardo Santos\n\nApós realização do pagamento, enviar o comprovante nessa conversa\n\n`;
    }

    mensagem += `Tipo: ${tipoPedido}\n`;

    if (tipoPedido === "Entrega") {
        mensagem += `Endereço: ${endereco}\n`;
    }

    mensagem += `\nObrigado pela preferência D&F Agradece!`;

    let numero = "5511947453021";

    let url = `https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`;

    window.open(url, "_blank");
}


document.getElementById("finalizarwpp").addEventListener("click",enviarpedidowpp);