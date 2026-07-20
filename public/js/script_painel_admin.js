document.getElementById("gerenciarassados").addEventListener("click", function(e){
    window.location.href = "assados_admin.php"
});

document.getElementById("gerenciarbebidas").addEventListener("click", function(e){
    window.location.href = "bebidas_admin.php"
});

document.getElementById("inserirproduto").addEventListener("click", function(e){
    window.location.href = "inserir_produtos.php"
});

document.getElementById("encerrarsessao").addEventListener("click", function(e){
    window.location.href = "../admindf0511/comandos_admin/logout.php"
});