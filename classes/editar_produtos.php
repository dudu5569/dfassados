<?php
include_once 'c:\xampp\htdocs\casadeassados\config\connn.php';

class EditarProdutos{
    
    public function editarprodutoscomimg($id,$descricao,$preco,$destaque,$id_categoria,$imagem){
        global $conn;

        $sql = "UPDATE produtos SET descricao = ?, preco = ?, destaque = ?, id_categoria = ?, imagem = ? WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if(!$stmt){
            die("Erro no prepare: ". $conn->error);
        }

        $stmt->bind_param("sdsisi", $descricao,$preco,$destaque,$id_categoria,$imagem,$id);
        if($stmt->execute()){
        }else{
            echo "<script>alert('Erro ao editar produto!')</script>";
        }
        
    }


        public function editarprodutossemimg($id,$descricao,$preco,$destaque,$id_categoria){
        global $conn;

        $sql = "UPDATE produtos SET descricao = ?, preco = ?, destaque = ?, id_categoria = ? WHERE id = ?";

        $stmt = $conn->prepare($sql);
        if(!$stmt){
            die("Erro no prepare: ". $conn->error);
        }

        $stmt->bind_param("sdsii", $descricao,$preco,$destaque,$id_categoria,$id);
        if($stmt->execute()){
        }else{
            echo "<script>alert('Erro ao editar produto!')</script>";
        }
        
    }
}




?>