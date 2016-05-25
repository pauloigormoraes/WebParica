<?php

class colaborador{
    private $co_id;
    private $co_nome;
    private $co_cpf;
    private $co_rg;

    public function setId($id){
        $this->co_id = $id;
        return $this;
    }

    public function setNome($nome){
        $this->co_nome = $nome;
        return $this;
    }

    public function setCpf($cpf){
        $this->co_cpf = $cpf;
        return $this;
    }

    public function setRg($rg){
        $this->co_rg = $rg;
        return $this;
    }

    public function getId(){
        return $this->co_id;
    }

    public function getNome(){
        return $this->co_nome;
    }

    public function getCpf(){
        return $this->co_cpf;
    }

    public function getRg(){
        return $this->co_rg;
    }
}

?>