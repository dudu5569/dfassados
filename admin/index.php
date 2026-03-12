<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    header("Location: administrativo.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
</head>
<body>
<div class="containerlogin">
    <div class="form_login">
        <form action="../classes/verificar_login.php" method="post" >
            <h2 id="titleacesso">Área de Acesso</h2>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuário</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" required>
            </div>
            <div class="login_button">
                <button type="submit" class="btn btn-success">Acessar</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>