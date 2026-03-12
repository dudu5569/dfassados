<?php
include_once __DIR__ . '/../config/connn.php';
class InserirProdutos{
    public function inserirProdutos($descricao,$preco,$destaque,$id_categoria,$imagem){
        global $conn;

        $sql = "INSERT INTO produtos (descricao, preco,destaque,id_categoria,imagem) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        
        if(!$stmt){
            die("Erro no prepare: " .$conn->error);
            }
            
        $stmt->bind_param("sdsis", $descricao,$preco,$destaque,$id_categoria,$imagem);
        if($stmt->execute()){

        }else{
            $erro = $sql->error;
            echo "Erro: " .$error;
        }
    }
}


?>