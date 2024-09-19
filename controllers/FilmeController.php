<?php
require_once "models/Filmes.php";
 class FilmeController{

    public function save(Filmes $filme) {
        try {
            $conexao = Conexao::getInstance();
            $nome = $filme->getNome();
            $estudio = $filme->getEstudio();
            $descricao = $filme->getDescricao();
            $avaliacao = $filme->getAvaliacao();
            $genero = $filme->getGenero()->getId();
            $stream = $filme->getStream()->getId();
            // file_put_contents('./my-log.txt', 'test='.$stream);

            $stmt = $conexao->prepare("INSERT INTO filme (nome, estudio, descricao, avaliacao, genero, stream) VALUES (:nome, :estudio, :descricao, :avaliacao, :genero, :stream)");
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":estudio", $estudio);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":avaliacao", $avaliacao);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":stream", $stream);

            $stmt->execute();

            $lastInsertedId = $conexao->lastInsertId();
            $filme = $this->findById($lastInsertedId);
            // file_put_contents('./my-log.txt', 'test='.$filme);

            return $filme;
        } catch (PDOException $e) {
            echo "Erro ao salvar o filme: " . $e->getMessage();
            return null;
        }
    }

    public function findAll() {
        try {
            $conexao = Conexao::getInstance();
            $stmt = $conexao->prepare("SELECT f.id, f.nome, f.estudio, f.descricao, f.avaliacao, 
                                              g.id as genero_id, g.nome as genero_nome,
                                              s.id as stream_id, s.nome as stream_nome
                                       FROM filmes f
                                       JOIN generos g ON f.genero = g.id
                                       JOIN streams s ON f.stream = s.id");
            $stmt->execute();
            $filmes = array();
    
            while ($filme = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // Criar instâncias de Generos e Streams com os dados corretos
                $genero = new Generos($filme['genero_id'], $filme['genero_nome']);
                $stream = new Streams($filme['stream_id'], $filme['stream_nome'], $filme['stream_preco']);
                
                // Criar instância de Filmes com os dados recuperados
                $filmes[] = new Filmes($filme['id'], $filme['nome'], $filme['estudio'], $filme['descricao'], $filme['avaliacao'], $genero, $stream);
            }
    
            return $filmes;
        } catch (PDOException $e) {
            echo "Erro ao buscar os filmes: " . $e->getMessage();
            return null;
        }
    }

    public function update(Filmes $filme) {
        try {
            $conexao = Conexao::getInstance();
            $id = $filme->getId();
            $nome = $filme->getNome();
            $estudio = $filme->getEstudio();
            $descricao = $filme->getDescricao();
            $avaliacao = $filme->getAvaliacao();
            $genero = $filme->getGenero()->getId();
            $stream = $filme->getStream()->getId();
    
            $stmt = $conexao->prepare("UPDATE filmes SET nome = :nome, estudio = :estudio, descricao = :descricao, avaliacao = :avaliacao, genero = :genero, stream = :stream WHERE id = :id");
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":estudio", $estudio);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":avaliacao", $avaliacao);
            $stmt->bindParam(":genero", $genero);
            $stmt->bindParam(":stream", $stream);
    
            $stmt->execute();
    
            return $this->findById($id); // Retorna o filme atualizado
        } catch (PDOException $e) {
            echo "Erro ao atualizar o filme: " . $e->getMessage();
            return null;
        }
    }

    public function delete($id) {
        try {
            $conexao = Conexao::getInstance();
            $stmt = $conexao->prepare("DELETE FROM filmes WHERE id = :id");
            $stmt->bindParam(":id", $id);
    
            $stmt->execute();
    
            return true; // Retorna true se a exclusão for bem-sucedida
        } catch (PDOException $e) {
            echo "Erro ao excluir o filme: " . $e->getMessage();
            return false;
        }
    }

    public function findById($id) {
        try {
            $conexao = Conexao::getInstance();
            $stmt = $conexao->prepare("SELECT f.id, f.nome, f.estudio, f.descricao, f.avaliacao, 
                                              g.id as genero_id, g.nome as genero_nome,
                                              s.id as stream_id, s.nome as stream_nome, s.preco as stream_preco
                                       FROM filmes f
                                       JOIN generos g ON f.genero = g.id
                                       JOIN streams s ON f.stream = s.id
                                       WHERE f.id = :id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
    
            $filme = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if ($filme) {
                // Criar instâncias de Generos e Streams com os dados recuperados
                $genero = new Generos($filme['genero_id'], $filme['genero_nome']);
                $stream = new Streams($filme['stream_id'], $filme['stream_nome'], $filme['stream_preco']);
    
                // Retornar o filme encontrado
                return new Filmes($filme['id'], $filme['nome'], $filme['estudio'], $filme['descricao'], $filme['avaliacao'], $genero, $stream);
            } else {
                return null; // Retorna null se não encontrar o filme
            }
        } catch (PDOException $e) {
            echo "Erro ao buscar o filme: " . $e->getMessage();
            return null;
        }
    }
    
    
    
    
 }