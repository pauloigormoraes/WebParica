<?php

class declaracoes{
    private $dc_id;
    private $dc_nome;
    private $dc_text;

    public function setId($id){
        $this->dc_id = $id;
        return $this;
    }
    public function setNome($nome){
        $this->dc_nome = $nome;
        return $this;
    }
    public function setText($text){
        $this->dc_text = $text;
        return $this;
    }
    public function getId(){
        return $this->dc_id;
    }
    public function getNome(){
        return $this->dc_nome;
    }
    public function getText(){
        return $this->dc_text;
    }
}

?>