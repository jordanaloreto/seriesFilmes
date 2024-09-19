<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/seriesFilmes/models/Streams.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/seriesFilmes/models/Conexao.php";

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

    public function findAll(){
        $conexao = Conexao::getInstance();

        $stmt = $conexao->prepare("SELECT * FROM streams");
        $stmt->execute();

        $streams = array();

        while($stream = $stmt->fetch(PDO::FETCH_ASSOC)){
            $streams[] = new Streams($stream["id"], $stream["stream"], $stream["preco"]);
        }
        return $streams;
    }

    public function update(Streams $stream){
        try{
            $conexao = Conexao::getInstance();
            $id = $stream->getId();
            $stream = $stream->getStream();
            $preco = $stream->getPreco();

            $stmt = $conexao->prepare("UPDATE streams SET stream = :stream, preco = :preco WHERE id = :id");
            $stmt->bindParam(":stream", $stream);
            $stmt->bindParam(":preco", $preco);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $stream = $this->findById($id);

            return $stream;
        }catch(PDOException $e){
            echo "Erro ao atualizar a stream" . $e->getMessage();
            return null;
        }
    }

    public function delete($id) {
        try {
            $conexao = Conexao::getInstance();

            $stmt = $conexao->prepare("DELETE FROM streams WHERE id = :id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro ao excluir a stream: " . $e->getMessage();
            return false;
        }
    }


}