<?php

/*
    Com a função array_keys recebemos apenas um array com as chaves de um array

    A função array_values recebemos um array com apenas os valores de um array


*/

$carro = [

        'marca' => 'Audi',
        'motor' => '2.4',
        'teto-solar' => true,
        'cambio' => 'Manual',
        'portas' => 4
    ];

$chaves = array_keys($carro);

// Acessando as chaves
print_r($chaves);
echo "<br>";

// Acessando os valores
$valores = array_values($carro);
print_r($valores);
echo "<br>";
