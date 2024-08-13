<?php

require_once "Generos.php";
require_once "Streams.php";

class Filmes{
    private $id;
    private $nome;
    private $estudio;
    private $descricao;
    private $avaliacao;
    private $genero;
    private $stream;

    function __construct($id, $nome, $estudio, $descricao, $avaliacao, Generos $genero, Streams $stream)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->estudio = $estudio;
        $this->descricao = $descricao;
        $this->avaliacao = $avaliacao;
        $this->genero = $genero;
        $this->stream = $stream;
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function getEstudio(){
        return $this->estudio;
    }
    function setEstudio($estudio){
        $this->estudio = $estudio;
    }
    function getDescricao(){
        return $this->descricao;
    }
    function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    function getAvaliacao(){
        return $this->avaliacao;
    }
    function setAvaliacao($avaliacao){
        $this->avaliacao = $avaliacao;
    }
    function getGenero(){
        return $this->genero;
    }
    function setGenero(Generos $genero){
        $this->genero = $genero;
    }
    function getStream(){
        return $this->stream;
    }
    function setStream(Streams $stream){
        $this->stream = $stream;
    }
}
?>