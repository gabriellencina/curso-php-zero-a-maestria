<?php

class Cachorro {

    public $raca;
    public $cor;
    public $idade;

    public function __construct($raca, $cor, $idade)
    {

        $this->raca  = $raca;
        $this->cor   = $cor;
        $this->idade = $idade;        
    }

    public function exibiPropriedades(){

        echo "$this->raca  <br>";
        echo "$this->cor   <br>";
        echo "$this->idade <br>";

    }

}

$cachorro = new Cachorro("Pastor Alemão ", "Preto", 10);

$cachorro->exibiPropriedades();
