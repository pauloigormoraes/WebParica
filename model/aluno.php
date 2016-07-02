<?php

class aluno{

    private $al_id;
    private $al_nome_aluno;
    private $al_nome_mae;
    private $al_nome_pai;
    private $al_cpf_aluno;
    private $al_cpf_mae;
    private $al_cpf_pai;
    private $al_rg_aluno;
    private $al_rg_mae;
    private $al_rg_pai;
    private $al_cert_nasc;
    private $al_pcd;
    private $al_naturalidade;
    private $al_nacionalidade;
    private $al_obs;
    private $al_img_aluno;
    private $al_dt_nasc;
    private $al_dt_matricula;
    private $al_ct_id;
    private $al_tu_id;
    private $al_orgExp;
    private $al_situacao;
    private $al_estadoCivil;

    public function setId($id){
        $this->al_id = $id;
        return $this;
    }
    public function setNomeAluno($nome){
        $this->al_nome_aluno = $nome;
        return $this;
    }
    public function setNomeMae($nome){
        $this->al_nome_mae = $nome;
        return $this;
    }
    public function setNomePai($nome){
        $this->al_nome_pai = $nome;
        return $this;
    }
    public function setCpfAluno($cpf){
        $this->al_cpf_aluno = $cpf;
        return $this;
    }
    public function setCpfMae($cpf){
        $this->al_cpf_mae = $cpf;
        return $this;
    }
    public function setCpfPai($cpf){
        $this->al_cpf_pai = $cpf;
        return $this;
    }
    public function setRgAluno($rg){
        $this->al_rg_aluno = $rg;
        return $this;
    }
    public function setRgMae($rg){
        $this->al_rg_mae = $rg;
        return $this;
    }
    public function setRgPai($rg){
        $this->al_rg_pai = $rg;
        return $this;
    }
    public function setCertNasc($certNasc){
        $this->al_cert_nasc = $certNasc;
        return $this;
    }
    public function setPcd($bool){
        $this->al_pcd = $bool;
        return $this;
    }
    public function setNaturalidade($string){
        $this->al_naturalidade = $string;
        return $this;
    }
    public function setNacionalidade($string){
        $this->al_nacionalidade = $string;
        return $this;
    }
    public function setObs($text){
        $this->al_obs = $text;
        return $this;
    }
    public function setImg($address){
        $this->al_img_aluno = $address;
        return $this;
    }
    public function setDtNasc($date){
        $this->al_dt_nasc = $date;
        return $this;
    }
    public function setDtMatricula($date){
        $this->al_dt_matricula = $date;
        return $this;
    }
    public function setContactId($id){
        $this->al_ct_id = $id;
        return $this;
    }
    public function setTurmaId($id){
        $this->al_tu_id = $id;
        return $this;
    }
    public function setOrgaoExpedidor($orgao){
        $this->al_orgExp = $orgao;
        return $this;
    }
    public function setSituacaoAluno($situacao){
        $this->al_situacao = $situacao;
        return $this;
    }
    public function setEstadoCivil($estadocivil){
        $this->al_estadoCivil = $estadocivil;
        return $this;
    }

    public function getId(){
        return $this->al_id;
    }
    public function getNomeAluno(){
        return $this->al_nome_aluno;
    }
    public function getNomeMae(){
        return $this->al_nome_mae;
    }
    public function getNomePai(){
        return $this->al_nome_pai;
    }
    public function getCpfAluno(){
        return $this->al_cpf_aluno;
    }
    public function getCpfMae(){
        return $this->al_cpf_mae;
    }
    public function getCpfPai(){
        return $this->al_cpf_pai;
    }
    public function getRgAluno(){
        return $this->al_rg_aluno;
    }
    public function getRgMae(){
        return $this->al_rg_mae;
    }
    public function getRgPai(){
        return $this->al_rg_pai;
    }
    public function getCertNasc(){
        return $this->al_cert_nasc;
    }
    public function getPcd(){
        return $this->al_pcd;
    }
    public function getNaturalidade(){
        return $this->al_naturalidade;
    }
    public function getNacionalidade(){
        return $this->al_nacionalidade;
    }
    public function getObs(){
        return $this->al_obs;
    }
    public function getImg(){
        return $this->al_img_aluno;
    }
    public function getDtNasc(){
        return $this->al_dt_nasc;
    }
    public function getDtMatricula(){
        return $this->al_dt_matricula;
    }
    public function getContactId(){
        return $this->al_ct_id;
    }
    public function getTurmaId(){
        return $this->al_tu_id;
    }
    public function getOrgaoExpedidor(){
        return $this->al_orgExp;
    }
    public function getSituacaoAluno(){
        return $this->al_situacao;
    }
    public function getEstadoCivil(){
        return $this->al_estadoCivil;
    }

}

?>