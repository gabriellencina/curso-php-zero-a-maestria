<?php

class Car {

    public $rodas = 4;
    public $cor   = "Vermelha";
    public $aro   = 20;

    function ligar(){

        echo "Ligouuuuuuu!";

    }
}

$ferrari = new Car;

echo $ferrari->rodas . '<br>';
echo $ferrari->cor   . '<br>';
echo $ferrari->aro   . '<br>';

$ferrari->cor = "Preta";

echo $ferrari->cor;