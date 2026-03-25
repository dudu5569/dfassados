<?php
include_once("../config/connn.php");
class Listar_proudutos{
    

    public function listar_bebidas(){
    global $conn;

    $sql = $conn->query("SELECT * from produtos where id_categoria = 2");
    $lista = [];

    while($row = $sql->fetch_assoc()){
    $lista[] = $row;
    }
    

    return $lista;
    }


    public function listar_bebidas_destaque(){
    global $conn;

    $sql = $conn->query("SELECT * from produtos where id_categoria = 2 and destaque = 'sim'");
    $lista = [];

    while($row = $sql->fetch_assoc()){
    $lista[] = $row;
    }
    

    return $lista;
    }




    public function listar_frangos(){
    global $conn;

    $sql = $conn->query("SELECT * from produtos where id_categoria = 1");
    $lista = [];

    while($row = $sql->fetch_assoc()){
    $lista[] = $row;
    }
    

    return $lista;
    }

    public function listar_frangos_destaque(){
    global $conn;

    $sql = $conn->query("SELECT * from produtos where id_categoria = 1 and destaque = 'sim'");
    $lista = [];

    while($row = $sql->fetch_assoc()){
    $lista[] = $row;
    }
    

    return $lista;
    }


    public function listarprodutoparaeditar($id){
        global $conn;

            $sql = "SELECT * from produtos where id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();

            $resultado = $stmt->get_result();

            return $resultado->fetch_assoc();
            }
}

?>