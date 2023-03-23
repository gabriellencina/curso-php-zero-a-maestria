<?php

class Pessoa {

    function falar() {

        echo "Olá eu sou um objeto! <br>";

    }

    function somar($x, $y){
        echo $x + $y . '<br>';
    }
}

$gabriel = new Pessoa;
$gabriel->falar();

$lencina = new Pessoa;
$lencina->falar();

$gabriel->somar(2, 2);
$lencina->somar(10, 10);