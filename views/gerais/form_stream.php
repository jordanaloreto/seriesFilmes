<?php

require_once "controllers/StreamController.php";

if (isset($_GET["id"])) {
    $streamController = new StreamController();
    $stream = $streamController->findById($_GET["id"]);
}

if (isset($_POST["stream"]) && isset($_POST["preco"])) {
    $streamController = new StreamController();
    // Construindo o Stream
    $stream = new Streams(null, $_POST["stream"], $_POST["preco"]);
    // Salvando ou Atualizando Stream
    if (isset($_GET["id"])) {
        $stream->setId($_GET["id"]);
        $streamController->update($stream);  // Assumindo que você tem um método update
    } else {
        $streamController->save($stream);
    }
    // Voltando pra tela anterior
    // header("Location: ?pg=streams");
    // Encerra a execução do script php
    exit();
}

?>
<div class="container mt-4">
    <h2>Cadastrar Stream</h2>
    <form action="form_stream.php" method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Stream" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Stream</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Preço" id="floatingTextarea2"></textarea>
            <label for="floatingTextarea2">Preço</label>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
</div>

