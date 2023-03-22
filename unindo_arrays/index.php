<?php

/*
    Com essa função conseguimos unir os arrays
*/

$arr = [1, 2, 3];
$arr2 = [10, 20, 30];
$arr3 = [1.1, 2.1, 3.1];

$arrMerge = array_merge($arr, $arr2, $arr3);

print_r($arrMerge);
echo "<br>";