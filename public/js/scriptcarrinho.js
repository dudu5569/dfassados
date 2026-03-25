//script para o carrinho de compras

let iconecart = document.querySelector('.icon-cart');
let body = document.querySelector('body');
let botaofechar = document.querySelector('.close');
let botoes = document.querySelectorAll('.addcarrinho');
let lista = document.querySelector('.janelacarrinho .listacompras');
let carrinho = [];


iconecart.addEventListener('click', () =>{
    body.classList.toggle('mostrarcarrinho');

});

botaofechar.addEventListener('click', () =>{
    body.classList.toggle('mostrarcarrinho');
});

function renderizarCarrinho() {
    lista.innerHTML = "";

    carrinho.forEach(item => {
        let div = document.createElement('div');

        div.style.margin = "10px";
        div.style.padding = "10px";

        div.innerText = item.nome + " - Qtd: " + item.quantidade;

        lista.appendChild(div);
        console.log(lista.innerHTML);

    });
}



botoes.forEach(botao => {
    botao.addEventListener('click', (e) =>{
        e.preventDefault();

        let card = botao.closest('.card');
        let nome = card.querySelector('.card-title').innerText;

        let produto = carrinho.find(p => p.nome === nome);

        if(produto){
            produto.quantidade++;
        }else{
            carrinho.push({
                nome: nome,
                quantidade: 1
            });
        }

        console.log(carrinho);

        renderizarCarrinho();
    })
})






