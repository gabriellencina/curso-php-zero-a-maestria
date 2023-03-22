<?php

/*
    Array reduce tem como objetivo reduzir um array a apenas um valor.
    Podemos passar um segunda função como segundo param para algum processo ser executado.
    ex: array_reduce($arr, $funcao);

*/

$arr = [1, 10, 20, 30];

function soma ($a, $b){
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

function subtracao ($a, $b){
    return $a - $b;
}

$resultado = array_reduce($arr, "subtracao");

echo "$resultado <br>";