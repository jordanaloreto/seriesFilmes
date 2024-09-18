<body>
<div class="container mt-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="dropdown">
                <a class="navbar-brand dropdown-toggle d-flex align-items-center" href="#" id="dropdownUserLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="rounded-circle border border-dark p-2 me-2"></span>
                    <span class="user-name">Jordana</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownUserLink">
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
            <div>
                <div class="dropdown">
                    <a class="navbar-brand dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php
                        $modulo = 'Módulos';
                        if (isset($_GET['pg'])) {
                            switch ($_GET['pg']) {
                                case 'form_filme':
                                    $modulo = 'Filmes';
                                    break;
                                case 'form_livro':
                                    $modulo = 'Livros';
                                    break;
                                case 'form_serie':
                                    $modulo = 'Séries';
                                    break;
                                case 'streams':
                                    $modulo = 'Streams';
                                    break;
                                case 'form_stream':
                                    $modulo = 'Streams';
                                    break;
                                case 'generos':
                                    $modulo = 'Genero';
                                    break;
                                case 'form_genero':
                                    $modulo = 'Genero';
                                    break;
                            }
                        }
                        echo $modulo;
                        ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="?pg=form_livro">Livros</a></li>
                        <li><a class="dropdown-item" href="?pg=form_filme">Filmes</a></li>
                        <li><a class="dropdown-item" href="?pg=form_serie">Séries</a></li>
                        <li><a class="dropdown-item" href="?pg=streams">Streams</a></li>
                        <li><a class="dropdown-item" href="?pg=generos">Gênero</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-4 p-4" style="border: 2px solid black; border-radius: 25px;">
        <div class="row">
            <!-- <div class="col-md-3" style="border-right: 2px solid black;">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Cadastrar</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Listas</a>
                    </li>
                </ul>
            </div> -->
            <!-- <div class="col-md-9" style="border-left: 1px solid black;"> -->
                <!-- <div style="border-bottom: 2px solid black; margin-bottom: 10px;"></div> -->
                <!-- Conteúdo Principal -->
                <?php
                if (!empty($conteudo)) {
                    include_once $conteudo;
                } else {
                    echo "<h1>Bem-vindo ao Sistema!</h1>";
                }
                ?>
            <!-- </div> -->
        </div>
    </div>
</div>

<style>
    .navbar {
        padding: 10px;
        border: 2px solid black;
        border-radius: 25px;
    }

    .user-name {
        font-weight: bold;
    }

    .rounded-circle {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        height: 40px;
        width: 40px;
    }

    .navbar-brand {
        font-weight: bold;
        margin-right: 0;
    }

    .list-group-item a {
        text-decoration: none;
    }
    body {
    padding-bottom: 30px; /* Ajuste o valor conforme necessário */
}

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>