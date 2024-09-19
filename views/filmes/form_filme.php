<?php
require_once "controllers/FilmeController.php";
?>

<div class="container mt-4">
    <h2>Cadastrar Filme</h2>
    <form action="form_filme.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <!-- Primeira coluna: Imagem e Joinha -->
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="imagem">Imagem do Filme</label>
                    <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
                </div>

                <!-- Ícones de Joinha (pode trocar por um coração, ou outro ícone se desejar) -->
                <div class="rating mb-3">
                    <span class="heart">&#10084;</span>
                    <span class="heart">&#10084;</span>
                    <span class="heart">&#10084;</span>
                    <span class="heart">&#10084;</span>
                    <span class="heart">&#10084;</span>
                </div>
            </div>

            <!-- Segunda coluna: Dados do Filme -->
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="nomeFilme" placeholder="Nome do Filme" name="nome">
                    <label for="nomeFilme">Nome do Filme</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="genero" name="genero">
                        <option selected>Selecione um gênero</option>
                        <option value="1">Ação</option>
                        <option value="2">Comédia</option>
                        <option value="3">Drama</option>
                    </select>
                    <label for="genero">Gêneros</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="estudio" placeholder="Estúdio" name="estudio">
                    <label for="estudio">Estúdio</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="stream" name="stream">
                        <option selected>Selecione uma plataforma</option>
                        <option value="1">Netflix</option>
                        <option value="2">Amazon Prime</option>
                        <option value="3">Disney+</option>
                    </select>
                    <label for="stream">Onde assistir</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Deixe uma descrição" id="descricao" name="descricao" style="height: 100px"></textarea>
                    <label for="descricao">Descrição</label>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>

<!-- CSS -->
<style>
    .rating {
        display: flex;
        gap: 5px;
        font-size: 24px;
    }
    .heart {
        color: red;
        cursor: pointer;
    }
    .heart:hover {
        transform: scale(1.2);
    }
</style>
