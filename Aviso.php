<?php

class Aviso{

    public $titulo;
    public $datacriacao;
    public $datatermino;
    public $descricao;


    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo () {

        return $this->titulo ;
    }

    public function setDataCriacao($datacriacao){

        $this->datacriacao = $datacriacao;
    }

    public function getDataCriacao () {

        return $this->datacriacao;
    }

    public function setDataTermino($datatermino){

        $this->datatermino = $datatermino;
    }

    public function getDataTermino () {

        return $this->datatermino;
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }

    public function getDescricao() {

        return $this->datacriacao;
    }

}