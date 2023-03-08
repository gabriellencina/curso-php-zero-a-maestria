<?php
/*

Com a função array slice resgatamos uma faixa de elementos de um array.

Passamos 3 parâmetros, o array, o índice inicial e quantos elementos

queremos resgatar a partir do índice

*/

$arr = [1, 2, 3, 4, 5];

$slice1 = array_slice($arr, 2 ,4);
print_r($slice1);
echo "<br>";

$slice2 = array_slice($arr, 2, 2);
print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr, 4);
print_r($slice3);
echo "<br>";

$slice4 = array_slice($arr, 4, -3);
print_r($slice4);
echo "<br>";
