<?php

class materia{
    private $ma_id;
    private $ma_nome;

    public function setId($id){
        $this->ma_id = $id;
        return $this;
    }

    public function setNome($nome){
        $this->ma_nome = $nome;
        return $this;
    }

    public function getId(){
        return $this->ma_id;
    }

    public function getNome(){
        return $this->ma_nome;
    }
}