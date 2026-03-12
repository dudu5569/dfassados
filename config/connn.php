<?php
class Conexao{
    public function conectar(){
        $host = "localhost";
        $database = "assadosdb";
        $user = "root";
        $pass = "";
        $port = "3306";
        $charset = "utf8";
        try{
        $conn = new mysqli($host, $user, $pass, $database, $port);
        mysqli_set_charset($conn, $charset);

        return $conn;

    }catch(Throwable $th){
        die("Não foi possível realizar a conexão!".$th);
    }
    }
}

$conexao = new Conexao;
$conn = $conexao->conectar();
?>