<?php
include_once '../config/connn.php';
class Excluir_bebidas{
    
public function Excluir_bebidas($id_bebida){
    global $conn;

    if(!empty($id_bebida) && is_numeric($id_bebida)){
    $sql = "DELETE FROM produtos WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if(!$stmt){
        die("Erro no prepare: " . $conn->error);
    }

    $stmt->bind_param("i", $id_bebida);
    if(!$stmt->execute()){
        die("Erro ao executar: ". $stmt->error);
    }

    return true;
    }

    return "ID inválido!";

}
}





?>