<?php

class Usuarios{
    private $id;
    private $email;
    private $senha;

    function __construct(
        $id,
        $email,
        $senha
    ){
        $this->id = $id;
        $this->email = $email;
        $this->senha = $senha;
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getSenha(){
        return $this->senha;
    }
    function setSenha($senha){
        $this->senha = $senha;
    }
}