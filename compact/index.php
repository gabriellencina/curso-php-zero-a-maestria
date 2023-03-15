<?php

/*
    A função compact pega os valores de uma variável e monta um array associativo.
    Ele é basicamente o contrário do extract

*/

$marca = "Audi";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

$carro = compact("marca", "motor", "tetoSolar", "portas");

print_r($carro);