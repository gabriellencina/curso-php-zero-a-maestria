<?php

class Carro {

    public $cor;
    public $velocidade;
    public $velocidade_maxima;

    function setVelocidadeMaxima($vel){

        $this->velocidade_maxima = $vel;

    }

    function getVelocidadeMaxima(){

        echo "A velocidade máxima deste carro é: $this->velocidade_maxima Km/h <br>";

    }

}

$audi = new Carro;

$audi->cor = "Azul";

$audi->setVelocidadeMaxima(100);

$audi->getVelocidadeMaxima();

