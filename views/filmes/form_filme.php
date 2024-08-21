<?php

require_once "controllers/FilmeController.php";
?>
<div class="container mt-4">
    <h2>Cadastrar Filme</h2>
    <form action="processa_filme.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group mb-3">
                    <label for="imagem">Imagem do Filme</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
                </div>
                <div class="form-group mb-3 text-center">
                    <label for="avaliacao">Avaliação</label>
                    <div>
                        <input type="radio" id="coracao1" name="avaliacao" value="1">
                        <label for="coracao1">❤</label>
                        <input type="radio" id="coracao2" name="avaliacao" value="2">
                        <label for="coracao2">❤❤</label>
                        <input type="radio" id="coracao3" name="avaliacao" value="3">
                        <label for="coracao3">❤❤❤</label>
                        <input type="radio" id="coracao4" name="avaliacao" value="4">
                        <label for="coracao4">❤❤❤❤</label>
                        <input type="radio" id="coracao5" name="avaliacao" value="5">
                        <label for="coracao5">❤❤❤❤❤</label>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group mb-3">
                    <label for="nome">Nome do Filme</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="form-group mb-3">
                    <label for="genero">Gênero</label>
                    <select class="form-control" id="genero" name="genero" required>
                        <option value="Ação">Ação</option>
                        <option value="Comédia">Comédia</option>
                        <option value="Drama">Drama</option>
                        <option value="Ficção Científica">Ficção Científica</option>
                        <option value="Romance">Romance</option>
                        <option value="Terror">Terror</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="estudio">Estúdio</label>
                    <input type="text" class="form-control" id="estudio" name="estudio">
                </div>
                <div class="form-group mb-3">
                    <label for="onde_assistir">Onde Assistir</label>
                    <select class="form-control" id="onde_assistir" name="onde_assistir" required>
                        <option value="Netflix">Netflix</option>
                        <option value="Amazon Prime">Amazon Prime</option>
                        <option value="Disney+">Disney+</option>
                        <option value="HBO Max">HBO Max</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>
