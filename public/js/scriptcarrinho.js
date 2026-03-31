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
            <button id="removeritem" onclick="removerItem(${index})">Remover🗑️</button>
            
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

let selectElement = document.getElementById("tipo-pedido");

selectElement.addEventListener("change", () => {
    let valor = selectElement.value;
    let caixaendereco = document.getElementById("endereco-box");

    if (valor == "1") {
        caixaendereco.style.display = "block";
    } else {
        caixaendereco.style.display = "none";
    }
});

