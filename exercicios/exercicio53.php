<?php

class Cachorro {

    function latir(){

        echo "Au au! <br>";

    }

    function andar($m){

        echo "O cachorro andou $m metros <br>";

    }
}

$pastorAlemao = new Cachorro;
$pug = new Cachorro;

$pastorAlemao->latir();
$pastorAlemao->andar(2000);

$pug->latir();
$pug->andar(1000);