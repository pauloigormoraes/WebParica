<?php

class materia_turma{
    private $mt_id;
    private $mt_ma_id;
    private $mt_tu_id;

    public function setId($id){
        $this->mt_id = $id;
        return $this;
    }

    public function setMateriaId($id){
        $this->mt_ma_id = $id;
        return $this;
    }

    public function setTurmaId($id){
        $this->mt_tu_id = $id;
        return $this;
    }

    public function getId(){
        return $this->mt_id;
    }

    public function getMateriaId(){
        return $this->mt_ma_id;
    }

    public function getTurmaId(){
        return $this->mt_tu_id;
    }
}