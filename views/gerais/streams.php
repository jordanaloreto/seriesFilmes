<?php
require_once "controllers/StreamController.php";

// Instanciando o controlador de streams
$streamController = new StreamController();
$streams = $streamController->findAll(); // Recupera todas as streams do banco

?>

<div class="container mt-4">
    <h2>Listagem de Streams</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($streams as $stream): ?>
            <tr>
                <td><?php echo htmlspecialchars($stream->getId()); ?></td>
                <td><?php echo htmlspecialchars($stream->getStream()); ?></td>
                <td><?php echo htmlspecialchars($stream->getPreco()); ?></td>
                <td>
                    <!-- Ícone para editar, com redirecionamento para o formulário -->
                    <a href="?pg=form_stream&id=<?php echo $stream->getId(); ?>">
                        <i class="fas fa-eye"></i></a>
                    <!-- Ícone para deletar, com confirmação -->
                    <a href="?pg=delete_stream&id=<?php echo $stream->getId(); ?>" 
                       onclick="return confirm('Tem certeza que deseja excluir esta stream?')">
                        <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="?pg=form_stream" class="btn btn-primary">Cadastrar</a>
</div>
