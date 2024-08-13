<?php
    require_once "models/Conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistema</title>
</head>
<body>
    <?php
        $conexao = Conexao::getInstance();
        include_once "components/template.php";
        
        // Verifica se a variável PG existe e se o arquivo também existe
        if(!isset($_GET["pg"]) || !file_exists("views/" . $_GET["pg"] . ".php")) {
            // Se a variável não existe ou o arquivo não é encontrado, inclui uma página padrão
            include_once "components/template.php";  // Altere para o nome da sua página padrão
        } else {
            // Se existe, inclui a página correspondente
            include_once "views/" . $_GET["pg"] . ".php";
        }
    ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
