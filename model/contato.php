<?php

class contato{
    private $ct_id;
    private $ct_lagradouro;
    private $ct_numero;
    private $ct_bairro;
    private $ct_cidade;
    private $ct_estado;
    private $ct_email;
    private $ct_tel_1;
    private $ct_tel_2;

    public function setId($id){
        $this->ct_id = $id;
        return $this;
    }
    public function setLagradouro($lagradouro){
        $this->ct_lagradouro = $lagradouro;
        return $this;
    }
    public function setNumero($numero){
        $this->ct_numero = $numero;
        return $this;
    }
    public function setBairro($bairro){
        $this->ct_bairro = $bairro;
        return $this;
    }
    public function setCidade($cidade){
        $this->ct_cidade = $cidade;
        return $this;
    }
    public function setEstado($estado){
        $this->ct_estado = $estado;
        return $this;
    }
    public function setEmail($email){
        $this->ct_email = $email;
        return $this;
    }
    public function setTel1($tel){
        $this->ct_tel_1 = $tel;
        return $this;
    }
    public function setTel2($tel){
        $this->ct_tel_2 = $tel;
        return $this;
    }

    public function getId(){
        return $this->ct_id;
    }
    public function getLagradouro(){
        return $this->ct_lagradouro;
    }
    public function getNumero(){
        return $this->ct_numero;
    }
    public function getBairro(){
        return $this->ct_bairro;
    }
    public function getCidade(){
        return $this->ct_cidade;
    }
    public function getEstado(){
        return $this->ct_cidade;
    }
    public function getEmail(){
        return $this->ct_email;
    }
    public function getTel1(){
        return $this->ct_tel_1;
    }
    public function getTel2(){
        return $this->ct_tel_2;
    }

}

?>