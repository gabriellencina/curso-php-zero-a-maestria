<?php

// string para array

$frase = "testando o explode";

$fraseArray = explode(" ", $frase);

print_r($frase);
echo '<br>';

$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo '<br>';

$fraseB = "Carro, Avião, Barco, Moto";

$fraseBArray = explode(",", $fraseB);

print_r($fraseBArray);
echo '<br>';

for ($i = 0; $i < count($fraseBArray); $i++){

    echo "$fraseBArray[$i] <br>";

}