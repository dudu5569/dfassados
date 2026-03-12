<?php
include_once '../classes/excluir_assados.php';

if(isset($_POST['id_produto']) && is_numeric($_POST['id_produto'])){
    $id_assado = $_POST['id_produto'];
    $excluir_assado = new Excluir_Assados();
    $excluir = $excluir_assado->Excluir_Assados($id_assado);

    if(!$excluir){
        echo '<script>alert("Ocorreu um erro e não foi possível executar a exclusão!");
        window.location.href = "assados_admin.php";</script>';
    }else{
     echo '<script>alert("Exclusão Realizada com sucesso!");
    window.location.href = "assados_admin.php";
    </script>';
    }


}else{
    header('Location: "assados_admin.php"');
    exit;
}

?>