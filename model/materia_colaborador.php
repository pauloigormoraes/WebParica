<?php

class materia_colaborador{
    private $mc_id;
    private $mc_ma_id;
    private $mc_co_id;

    public function setId($id){
        $this->mc_id;
        return $this;
    }

    public function setMateriaId($id){
        $this->mc_ma_id = $id;
        return $this;
    }

    public function setColaboradorID($id){
        $this->mc_co_id = $id;
        return $this;
    }

    public function getId(){
        return $this->mc_id;
    }

    public function getMateriaId(){
        return $this->mc_ma_id;
    }

    public function getColaboradorId(){
        return $this->mc_co_id;
    }
}

?>