<?php

class ajax{
    protected $json;

    protected function cadastrarAlunos(){
        $this->json = json_decode($this->json);
        print "Hello API o/";
    }
}



?>