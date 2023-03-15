<?php

$carro  = "audi";
$portas = 4;
$cor    = "preto";

$carro = compact("carro", "portas", "cor");

// print_r($carro);

foreach($carro as $carro => $key){

    echo "$carro: $key <br>";

}