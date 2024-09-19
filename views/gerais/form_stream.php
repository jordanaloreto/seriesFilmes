<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/seriesFilmes/controllers/StreamController.php";

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
    header("Location: /seriesFilmes/index.php?pg=streams");
    // Encerra a execução do script php
    exit();
}

?>
<div class="container mt-4">
    <h2>Cadastrar Stream</h2>
    <form action="views/gerais/form_stream.php" method="POST" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <textarea class="form-control" name="stream" placeholder="Stream" id="floatingTextarea"><?= isset($stream) ? htmlspecialchars($stream->getStream()) : '' ?></textarea>
        <label for="floatingTextarea">Stream</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" name="preco" placeholder="Preço" id="floatingTextarea2"><?= isset($stream) ? htmlspecialchars($stream->getPreco()) : '' ?></textarea>
        <label for="floatingTextarea2">Preço</label>
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
</div>


