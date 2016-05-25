<?php

class colaborador_cargo{
    private $cc_id;
    private $cc_co_id;
    private $cc_ca_id;

    public function setId($id){
        $this->cc_id = $id;
        return $this;
    }

    public function setColaboradorId($id){
        $this->cc_co_id = $id;
        return $this;
    }

    public function setCargoId($id){
        $this->cc_ca_id = $id;
        return $this;
    }

    public function getId(){
        return $this->cc_id;
    }

    public function getColaboradorId(){
        return $this->cc_co_id;
    }

    public function getCargoId(){
        return $this->cc_ca_id;
    }
}

?>