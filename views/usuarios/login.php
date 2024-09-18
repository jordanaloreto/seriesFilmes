<?php
require_once "controllers/UsuarioController.php";
session_start();

if (isset($_POST["login"]) && isset($_POST["senha"])) {
    $usuarioController = new UsuarioController();
    $usuarioController->login($_POST["login"], $_POST["senha"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <form method="POST">
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Email address</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="login" placeholder="name@example.com" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password (senha)</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="senha" placeholder="Password" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="?pg=form_usuario" class="btn btn-secondary">Cadastrar</a>
                    <a href="?pg=logout" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </form>
    </div>

    <?php
    if(isset($_SESSION["mensagem"])){
    ?>
        <div class="alert alert-warning" role="alert">
            <strong>ERRO:</strong>
            <?php
            echo $_SESSION["mensagem"];
            unset ($_SESSION["mensagem"]);
            ?>
        </div>
    <?php } ?>
</body>
</html>
