<?php

require_once "models/Streams.php";

class StreamController{

    public function save(Streams $streams){
        try{
            $conexao = Conexao::getInstance();
            $stream = $streams->getstream();
            $preco = $streams->getPreco();
            $stmt = $conexao->prepare("INSERT INTO streams (stream, preco) VALUES (:stream, :preco)");
            $stmt->bindParam(":stream", $stream);
            $stmt->bindParam(":preco", $preco);

            $stmt->execute();

            $streams = $this->findById($conexao->lastInsertId());

            return $streams;
        }catch (PDOException $e){
            echo "Erro ao salvar a streams: " . $e->getMessage();
        }
    }

    public function findById($id){
        try{
            $conexao = Conexao::getInstance();
            
            $stmt = $conexao->prepare("SELECT * FROM streams WHERE id = :id");
            $stmt->bindParam(":id", $id);
            
            $stmt->execute();
            
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            $streams = new Streams($resultado["id"], $resultado["stream"], $resultado["preco"]);
            
            return $streams;
        }catch (PDOException $e){
            echo "Erro ao buscar a streams: " . $e->getMessage();
        }
    }
}