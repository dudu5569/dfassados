<?php
include_once '../../classes/inserir_produtos.php';
$inserir = new InserirProdutos();

$form = ['nomeproduto','precoproduto','destaqueproduto','nomecategoria'];


foreach($form as $campo){
    if(empty($_POST[$campo])){
        die ("O $campo está vazio!");
        exit;
    }
}

if(empty($_FILES['imagem']['name'])){
    die ("Imagem não enviada");
}


        $nomeproduto = $_POST['nomeproduto'];
        $preco = $_POST['precoproduto'];
        $destque = $_POST['destaqueproduto'];
        $nomecategoria = $_POST['nomecategoria'];
        $caminho = $_FILES['imagem']['tmp_name'];
        $nomeimagem = $_FILES['imagem']['name'];  

        $inserir_produtos = $inserir->inserirProdutos($nomeproduto,$preco,$destque,$nomecategoria,$nomeimagem);
        if($inserir_produtos){
            move_uploaded_file($caminho,"../../img/" . $nomeimagem);
            echo "<script>alert('Produto inserido com sucesso!');
            
            let idcat = $nomecategoria;
            if (idcat == 1){
            window.location.href = '../assados_admin.php';
            }else if (idcat == 2){
            window.location.href = '../bebidas_admin.php';
        }</script>";
        }else{  
            echo "<script>alert('Falha ao inserir produto!');
            window.location.href='../administrativo.php';</script>";
}


?>