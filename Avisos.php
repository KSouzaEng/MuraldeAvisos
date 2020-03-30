<?php

class Avisos{

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

        return $this->datacriacao= $datacriacao;
    }

    public function setDataTermino($datacriacao){

        $this->datatermino = $datatermino;
    }

    public function getDataTermino () {

        return $this->datatermino = $datatermino;
    }

    public function setDescricao($datacriacao){

        $this->descricao = $descricao;
    }

    public function getDataDescricao() {

        return $this->datacriacao= $datacriacao;
    }

}