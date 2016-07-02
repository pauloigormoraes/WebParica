<?php

class materia{
    private $ma_id;
    private $ma_nome;
    private $ma_co_id;
    private $ma_tu_id;

    public function setId($id){
        $this->ma_id = $id;
        return $this;
    }

    public function setNome($nome){
        $this->ma_nome = $nome;
        return $this;
    }

    public function setColaboradorId($id){
        $this->ma_co_id = $id;
        return $this;
    }

    public function setTurmaId($id){
        $this->ma_tu_id = $id;
        return $this;
    }

    public function getId(){
        return $this->ma_id;
    }

    public function getNome(){
        return $this->ma_nome;
    }

    public function getColaboradorId(){
        return $this->ma_co_id;
    }

    public function getTurmaId(){
        return $this->ma_tu_id;
    }
}