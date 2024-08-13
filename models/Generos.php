<?php

class Generos{
    private $id;
    private $genero;

    function __construct($id, $genero){
        $this->id = $id;
        $this->genero = $genero;
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getGenero(){
        return $this->genero;
    }
    function setGenero($genero){
        $this->genero = $genero;
    }
}