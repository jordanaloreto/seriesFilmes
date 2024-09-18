<?php

require_once "models/Conexao.php";
require_once "models/Usuarios.php";

class UsuarioController{
    public function login($email, $senha){
        try {
            $conexao = Conexao::getInstance();
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['mensagem'] = 'Formato de email inválido';
                return;
            }
    
            $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
    
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($resultado) {
                $usuario = new Usuarios($resultado["id"], $resultado["email"], $resultado["senha"]);
    
                if (password_verify($senha, $usuario->getSenha())) {
                    $_SESSION['id_usuario'] = $usuario->getId();
                    $_SESSION['email_usuario'] = $usuario->getEmail();
                    header("Location: ?pg=categorias");
                    exit();
                }
            }
    
            $_SESSION['mensagem'] = 'Email ou senha inválidos';
        } catch (PDOException $e) {
            echo "Erro ao buscar o usuário: " . $e->getMessage();
        }
    }
    

    public function save(Usuarios $usuario) {
        try {
            $conexao = Conexao::getInstance();
            $email = $usuario->getEmail();
            $senha = $usuario->getSenha();
            // Criptografa a senha antes de salvar
            $senha = password_hash($usuario->getSenha(), PASSWORD_BCRYPT);

            $stmt = $conexao->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);

            $stmt->execute();

            $lastInsertedId = $conexao->lastInsertId();
            return $this->findById($lastInsertedId);
        } catch (PDOException $e) {
            echo "Erro ao salvar o usuário: " . $e->getMessage();
            return null;
        }
    }

    public function findById($id) {
        try {
            $conexao = Conexao::getInstance();

            $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE id = :id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($resultado) {
                return new Usuarios(
                    $resultado["id"],
                    $resultado["email"],
                    $resultado["senha"]
                );
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo "Erro ao buscar o usuário: " . $e->getMessage();
            return null;
        }
    }
}
?>
