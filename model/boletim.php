<?php

class boletim{

    private $bo_id;
    private $bo_n1 = 1;
    private $bo_n2;
    private $bo_n3;
    private $bo_n4;
    private $bo_f1;
    private $bo_f2;
    private $bo_f3;
    private $bo_f4;
    private $bo_ma_id;
    private $bo_al_id;

    public function setId($id){
        $this->bo_id = $id;
        return $this;
    }
    public function setNotas($n1, $n2, $n3, $n4){ //Put 'null' (without '') in the variables tha you won't use
        if(!is_null($n1)) $this->bo_n1 = $n1;
        if(!is_null($n2)) $this->bo_n2 = $n2;
        if(!is_null($n3)) $this->bo_n3 = $n3;
        if(!is_null($n4)) $this->bo_n4 = $n4;
        return $this;
    }
    public function setFaltas($f1, $f2, $f3, $f4){
        if($f1) $this->bo_f1 = $f1;
        if($f2) $this->bo_f2 = $f2;
        if($f3) $this->bo_f3 = $f3;
        if($f4) $this->bo_f4 = $f4;
    }
    public function setMateriaId($id){
        $this->bo_ma_id = $id;
        return $this;
    }
    public function setAlunoId($id){
        $this->bo_al_id = $id;
        return $this;
    }

    public function getId(){
        return $this->bo_id;
    }
    public function getNotas($bimestre){
        $notas = array(
            1 => $this->bo_n1,
            2 => $this->bo_n2,
            3 => $this->bo_n3,
            4 => $this->bo_n4
        );
        return floatval($notas[$bimestre]);
    }
    public function getNotasMedia(){
        $somatorio = $this->bo_n1 + $this->bo_n2 + $this->bo_n3 + $this->bo_n4;
        return $somatorio/4;
    }
    public function getFaltas($bimestre){
        $faltas = array(
            1 => $this->bo_f1,
            2 => $this->bo_f2,
            3 => $this->bo_f3,
            4 => $this->bo_f4
        );
        return floatval($faltas[$bimestre]);
    }
    public function getMateriaId(){
        return $this->bo_ma_id;
    }
    public function getAlunoId(){
        return $this->bo_al_id;
    }
    
}


?>