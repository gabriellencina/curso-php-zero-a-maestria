<?php


class Humano {

    public const OLHOS  = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstantes(){

        // Para acessar uma constante dentro de um método usamos o self e os :: 
        echo self::BRACOS . "<br>";

    }

}

$gabriel = new Humano;

echo $gabriel::OLHOS . "<br>";

$gabriel->mostrarConstantes();