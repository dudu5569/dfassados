<?php
include '../../classes/editar_produtos.php';
$id = $_POST['id_produto'];
$descricao = $_POST['nomeproduto'];
$preco = $_POST['precoproduto'];
$destaque = $_POST['destaqueproduto'];
$id_categoria = $_POST['nomecategoria'];
$imagematual = $_POST['imagem_atual'];

$editar = new EditarProdutos();

if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
    $imagem = $_FILES['imagem']['name'];
    $caminho = $_FILES['imagem']['tmp_name'];
    $descricao = $_POST['nomeproduto'];
    $preco = $_POST['precoproduto'];
    $destaque = $_POST['destaqueproduto'];
    $id_categoria = $_POST['nomecategoria'];
    $edicao = $editar->editarprodutoscomimg($id,$descricao,$preco,$destaque,$id_categoria,$imagem);
    if(!$edicao){
        move_uploaded_file($caminho,"../../img/" . $imagem);
        echo "
        <script>
        let idcat = $id_categoria;
        alert('Produto editado com sucesso!');

        if (idcat == 1){
            window.location.href = '../assados_admin.php';
        }else if (idcat == 2){
            window.location.href = '../bebidas_admin.php';
        }
        </script>";
    }else{
        echo "<script>alert('Falha ao editar produto!')</script>";
    }


}else{
    $descricao = $_POST['nomeproduto'];
    $preco = $_POST['precoproduto'];
    $destaque = $_POST['destaqueproduto'];
    $id_categoria = $_POST['nomecategoria'];
    $imagematual = $_POST['imagem_atual'];
    $edicao = $editar->editarprodutoscomimg($id,$descricao,$preco,$destaque,$id_categoria,$imagematual);
    if(!$edicao){
        echo "
        <script>
        let idcat = $id_categoria;
        alert('Produto editado com sucesso!');
        
        if (idcat == 1){
            window.location.href = '../assados_admin.php';
        }else if (idcat == 2){
            window.location.href = '../bebidas_admin.php';
        }</script>";
    }else{
        echo "<script>alert('Falha ao editar produto!')</script>";
    }

}






?>