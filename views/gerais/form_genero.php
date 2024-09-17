<?php

require_once "controllers/GeneroController.php";

if (isset($_GET["id"])) {
    $generoController = new GeneroController();
    $genero = $generoController->findById($_GET["id"]);
}

if (isset($_POST["genero"]) && isset($_POST["preco"])) {
    $generoController = new GeneroController();
    // Construindo o Stream
    $genero = new Generos(null, $_POST["genero"]);
    // Salvando ou Atualizando Stream
    if (isset($_GET["id"])) {
        $genero->setId($_GET["id"]);
        $generoController->update($genero);  // Assumindo que você tem um método update
    } else {
        $generoController->save($genero);
    }
    // Voltando pra tela anterior
    // header("Location: ?pg=generos");
    // Encerra a execução do script php
    exit();
}

?>
<div class="container mt-4">
    <h2>Cadastrar Gêneros</h2>
    <form action="form_genero.php" method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Stream" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Gênero</label>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
</div>

