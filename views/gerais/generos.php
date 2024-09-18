<?php
require_once "controllers/GeneroController.php";

// Instanciando o controlador de generos
$generoController = new GeneroController();
$generos = $generoController->findAll(); // Recupera todas as generos do banco

?>

<div class="container mt-4">
    <h2>Listagem de Gêneros</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Gênero</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generos as $genero): ?>
            <tr>
                <td><?php echo htmlspecialchars($genero->getId()); ?></td>
                <td><?php echo htmlspecialchars($genero->getGenero()); ?></td>
                <td>
                    <!-- Ícone para editar, com redirecionamento para o formulário -->
                    <a href="?pg=form_genero&id=<?php echo $genero->getId(); ?>">
                        <i class="fas fa-eye"></i></a>
                    <!-- Ícone para deletar, com confirmação -->
                    <a href="?pg=delete_genero&id=<?php echo $genero->getId(); ?>" 
                       onclick="return confirm('Tem certeza que deseja excluir esta genero?')">
                        <i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="?pg=form_genero" class="btn btn-primary">Cadastrar</a>
</div>
