<?php

/*
    Apenas devolve o array original de forma aleatória
*/

$arr = range(1, 20);

shuffle($arr);

print_r($arr);
echo "<br>";