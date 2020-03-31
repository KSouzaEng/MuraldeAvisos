<?php

class Aviso{

    public $titulo;
    public $email;
    public $telefone;
    public $descricao;


    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo () {

        return $this->titulo ;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail () {

        return $this->email ;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getTelefone () {

        return $this->telefone ;
    }
    
    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }

    public function getDescricao() {

        return $this->descricao;
    }

}