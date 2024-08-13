<?php

class Streams{
    private $id;
    private $stream;
    private $preco;

    function __construct($id, $stream, $preco){
        $this->id = $id;
        $this->stream = $stream;
        $this->preco = $preco;
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getStream(){
        return $this->stream;
    }
    function setStream($stream){
        $this->stream = $stream;
    }
    function getPreco(){
        return $this->preco;
    }
    function setPreco($preco){
        $this->preco = $preco;
    }
}