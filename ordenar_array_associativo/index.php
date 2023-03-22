<?php

/*
    Para ordenar em ordem crescente pelo valor das chaves, usamos a função asort
    Para decrescente usamos arsort.
    Já se quisermos ordenar o array pelas chaves, usamos ksort
    krsort também para decrescente
*/

$arr = [
        'Gabriel' => 21,
        'Joao' => 12,
        'Pedro' =>32
        ];

arsort($arr);
print_r($arr);
echo "<br>";

$arr2 = [
    'Gabriel' => 21,
    'Joao' => 12,
    'Pedro' =>32
    ];

asort($arr2);
print_r($arr2);
echo "<br>";

$arr3 = [
    'Gabriel' => 21,
    'Joao' => 12,
    'Pedro' =>32
    ];

ksort($arr);
print_r($arr);
echo "<br>";

$arr4 = [
    'Gabriel' => 21,
    'Joao' => 12,
    'Pedro' =>32
    ];

krsort($arr);
print_r($arr);
echo "<br>";


