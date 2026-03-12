document.getElementById("arquivo").onchange = function(evt){
    const [file] = this.files;
    if(file){
        document.getElementById("preview").src = URL.createObjectURL(file);
    }
}

document.getElementById("removeimg").addEventListener("click", function(e){
    e.preventDefault(); //previnir envio do formulario
    document.getElementById("preview").src = "";
    document.getElementById("arquivo").value = "";
});

document.getElementById("limparform").addEventListener("click", function(e){
    e.preventDefault(); //previnir envio do formulario
    document.getElementById("preview").src = "";
    document.getElementById("arquivo").value = "";
    document.getElementById("nomeproduto").value = "";
    document.getElementById("precoproduto").value = "";
    document.getElementById("descproduto").value = "";
    document.getElementById("nomearquivo").value = "";
});

let changeimg;

document.getElementById("trocarimg").addEventListener("change", function(){
    const select  = this.value;
    const arquivo = document.getElementById("arquivo");
    if(select == "2"){
        arquivo.removeAttribute("required");
        arquivo.disabled = true;
    }else{
        arquivo.setAttribute("required", "");
        arquivo.disabled = false;
    }

});



