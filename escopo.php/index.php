<?php

$a = 10;

$b = 15;

function testeEscopo(){

    $a = 5;
    
    global $b;

    static $c = 0;

    $a++;

    $b++;

    $c++;

    echo "Escopo local de A: $a . <br>";

    echo "Escopo Global de b: $b . <br>";
    
    echo "Escopo static de c: $c . <br>";

}

echo "Escopo Global de A: $a . <br>";
echo "Escopo Global de A: $b . <br>";
testeEscopo();

echo "Escopo Global de B2: $b . <br>";

testeEscopo();
