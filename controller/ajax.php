<?php

include "../model/dao/db_aluno.php";

class ajax{
    protected $json;

    protected function cadastrarAlunos(){
        print $this->json->nome_aluno;
        $ne = new db_aluno();
        $ne->hello();
    }
}



?>