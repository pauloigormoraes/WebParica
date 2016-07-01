<?php

class aluno_turma{
    private $at_id;
    private $at_al_id;
    private $at_tu_id;

    public function setId($id){
        $this->at_id = $id;
        return $this;
    }

    public function setAlunoId($id){
        $this->at_al_id = $id;
        return $this;
    }

    public function setTurmaId($id){
        $this->at_tu_id = $id;
        return $this;
    }

    public function getId(){
        return $this->at_id;
    }

    public function getAlunoId(){
        return $this->at_al_id;
    }

    public function getTurmaId(){
        return $this->at_tu_id;
    }
}

?>