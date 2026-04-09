<?php
include_once '../classes/excluir_bebidas.php';

if(isset($_POST['id_produto']) && is_numeric($_POST['id_produto'])){
$id_bebida = $_POST['id_produto'];
$excluir_bebida = new Excluir_bebidas();
$excluir = $excluir_bebida->Excluir_bebidas($id_bebida);

if(!$excluir){
    echo '<script>alert("Ocorreu um erro e não foi possível executar a exclusão!");
                window.location.href = "bebidas_admin.php";</script>';
}else{
    echo '<script>alert("Exclusão Realizada com sucesso!");
    window.location.href = "bebidas_admin.php";
    </script>';
}
}else{
    header("Location: bebidas_admin.php");
    exit;
}


?>