<?php

class cargo{
    private $ca_id;
    private $ca_nome;
    private $ca_salario;
    private $ca_turno;

    public function setId($id){
        $this->ca_id = $id;
        return $this;
    }

    public function setNome($nome){
        $this->ca_nome = $nome;
        return $this;
    }

    public function setSalario($salario){
        $this->ca_salario = $salario;
        return $this;
    }

    public function setTurno($turno){
        $this->ca_turno = $turno;
        return $this;
    }

    public function getId(){
        return $this->ca_id;
    }

    public function getNome(){
        return $this->ca_nome;
    }

    public function getSalario(){
        return $this->ca_salario;
    }

    public function getTurno(){
        return $this->ca_turno;
    }

}
