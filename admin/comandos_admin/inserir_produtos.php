<?php
include_once '../../classes/inserir_produtos.php';
$inserir = new InserirProdutos();

$form = ['nomeproduto','precoproduto','destaqueproduto','nomecategoria'];

if(empty($_POST[$form] || empty($_FILES['imagem']['name']))){
    echo "<script>
    alert('Preencha todos os campos!');
    window.location.href='../administrativo.php';
    </script>";
    exit;
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
            window.location.href='../administrativo.php';</script>";
        }else{  
            echo "<script>alert('Falha ao inserir produto!');
            window.location.href='../administrativo.php';</script>";
        }
}


?>