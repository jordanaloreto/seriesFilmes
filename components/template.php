
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
                        <li><a class="dropdown-item" href="#">Livros</a></li>
                        <li><a class="dropdown-item" href="#">Filmes</a></li>
                        <li><a class="dropdown-item" href="#">Séries</a></li>
                        <li><a class="dropdown-item" href="#">Geral</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-3">
            <!-- Sidebar -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Listas</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <!-- Conteúdo Principal -->
            <h1>Conteúdo Principal</h1>
            <!-- O restante do conteúdo -->
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
</style>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
