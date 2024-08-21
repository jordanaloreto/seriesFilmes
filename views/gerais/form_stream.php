<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Cadastrar Stream</h3>
                <form>
                    <div class="mb-3">
                        <label for="streamName" class="form-label">Nome da Stream</label>
                        <input type="text" class="form-control" id="streamName" placeholder="Netflix">
                    </div>
                    <div class="mb-3">
                        <label for="streamPrice" class="form-label">Preço</label>
                        <input type="text" class="form-control" id="streamPrice" placeholder="50.00">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Salvar</button>
                </form>
            </div>
        </div>
    </div>

    <style>
        body {
            padding-bottom: 20px;
        }
        .card {
            border: 2px solid black;
            border-radius: 25px;
        }
        .card-title {
            font-weight: bold;
        }
        .form-label {
            font-weight: bold;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
