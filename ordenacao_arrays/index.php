<?php

/*
    Para ordenar em ordem cresceente podemos utilizar a função sort em um array.
    Para ordenar de forma inversa utilizamos rsort 
*/

$arr = [2, 1, 10 , 12, 1251, 125];

sort($arr);
print_r($arr);
echo "<br>";

rsort($arr);
print_r($arr);
echo "<br>";