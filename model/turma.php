<?php


class turma{
    private $tu_id;
    private $tu_nome;
    private $tu_turno;
    private $tu_ano;

    public function setId($id){
        $this->tu_id = $id;
        return $this;
    }
    public function setNome($nome_turma){
        $this->tu_nome = $nome_turma;
        return $this;
    }
    public function setTurno($turno){
        $this->tu_turno = $turno;
        return $this;
    }
    public function setAno($date){
        $this->tu_ano = $date;
        return $this;
    }

    public function getId(){
        return $this->tu_id;
    }
    public function getNome(){
        return $this->tu_nome;
    }
    public function getTurno(){
        return $this->tu_turno;
    }
    public function getAno(){
        return $this->tu_ano;
    }
}

?>