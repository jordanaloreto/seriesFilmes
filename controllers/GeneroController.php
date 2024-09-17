<?php

require_once "models/Generos.php";

class GeneroController{

    public function save(Generos $genero){
        try{
            $conexao = Conexao::getInstance();
            $genero = $genero->getGenero();
            $stmt = $conexao->prepare("INSERT INTO generos (genero) VALUES (:genero)");
            $stmt->bindParam(":genero", $genero);

            $stmt->execute();

            $genero = $this->findById($conexao->lastInsertId());

            return $genero;
        }catch (PDOException $e){
            echo "Erro ao salvar a genero: " . $e->getMessage();
        }
    }

    public function findById($id){
        try{
            $conexao = Conexao::getInstance();
            
            $stmt = $conexao->prepare("SELECT * FROM generos WHERE id = :id");
            $stmt->bindParam(":id", $id);
            
            $stmt->execute();
            
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            $generos = new Generos($resultado["id"], $resultado["genero"]);
            
            return $generos;
        }catch (PDOException $e){
            echo "Erro ao buscar o generos: " . $e->getMessage();
        }
    }

    public function findAll(){
        $conexao = Conexao::getInstance();

        $stmt = $conexao->prepare("SELECT * FROM generos");
        $stmt->execute();

        $generos = array();

        while($genero = $stmt->fetch(PDO::FETCH_ASSOC)){
            $generos[] = new Generos($genero["id"], $genero["genero"]);
        }
        return $generos;
    }

    public function update(Generos $genero){
        try{
            $conexao = Conexao::getInstance();
            $id = $genero->getId();
            $genero = $genero->getGenero();

            $stmt = $conexao->prepare("UPDATE generos SET genero = :genero WHERE id = :id");
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $genero = $this->findById($id);

            return $genero;
        }catch(PDOException $e){
            echo "Erro ao atualizar a genero" . $e->getMessage();
            return null;
        }
    }

    public function delete($id) {
        try {
            $conexao = Conexao::getInstance();

            $stmt = $conexao->prepare("DELETE FROM generos WHERE id = :id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro ao excluir a genero: " . $e->getMessage();
            return false;
        }
    }


}