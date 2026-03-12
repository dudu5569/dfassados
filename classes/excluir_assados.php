<?php
include_once '../config/connn.php';

class Excluir_Assados{
    public function Excluir_Assados($id_assado){
        global $conn;

    if(!empty($id_assado) && is_numeric($id_assado)){
        $sql = "DELETE FROM produtos WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if(!$stmt){
            die ("Erro no prepare: " . $conn->error);
        }

        $stmt->bind_param("i", $id_assado);
        if(!$stmt->execute()){
            die("Erro ao executar: " . $conn->error);
            }
            return true;
        }

        return "ID inválido";
    }

}





?>