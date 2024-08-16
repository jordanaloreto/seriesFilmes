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
                        Livros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="form_livro.php">Livros</a></li>
                        <li><a class="dropdown-item" href="form_filme.php">Filmes</a></li>
                        <li><a class="dropdown-item" href="form_serie.php">Séries</a></li>
                        <li><a class="dropdown-item" href="form_geral.php">Geral</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Container with rounded corners for sidebar and content -->
    <div class="container mt-4 p-4" style="border: 2px solid black; border-radius: 25px;">
        <div class="row">
            <div class="col-md-3" style="border-right: 2px solid black;">
                <!-- Sidebar -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">Cadastrar</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Listas</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9" style="border-left: 2px solid black;">
                <!-- Linha amarela horizontal -->
                <div style="border-bottom: 2px solid black; margin-bottom: 10px;"></div>
                <!-- Conteúdo Principal -->
                <h1>Conteúdo Principal</h1>
                <!-- O restante do conteúdo -->
            </div>
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
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
