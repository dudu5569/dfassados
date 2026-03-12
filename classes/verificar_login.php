<?php
include '..\config\connn.php';
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
class login{

    public function verificar_login($usuario, $senha){
        global $conn;
        
        $sql = "SELECT * FROM usuarios where usuario = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Erro no prepare: " . $conn->error);
        }
        $stmt->bind_param("s", $usuario);
        $stmt->execute();

        $resultado = $stmt->get_result();
        $usuarioBanco = $resultado->fetch_assoc();


        if($usuarioBanco && password_verify($senha, $usuarioBanco['senha'])){
            if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

            session_regenerate_id(true); 
            $_SESSION['usuario_id'] = $usuarioBanco['id'];

            header("Location: ..\admin\administrativo.php");
            exit;
        }else{
            header("Location: ..\admin\loginfailed.php");
            exit;
        }
        
        }
        
    }
        $log = new login;
        $log->verificar_login($usuario, $senha);
?>