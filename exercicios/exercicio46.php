<?php

$arr_multi =

        [
            [1, 2, 3], 

            [4, 5, 6],

            [7, 8, 9]

        ];

// loop do array externo
for($i = 0; $i < count($arr_multi); $i++){

    // imprimindo array
    echo "imprimindo array externo: " . ($i + 1) . '<br>';

    // imprimindo array interno

    for($j = 0; $j < count($arr_multi[$i]); $j++){

    echo $arr[$i][$j] . '<br>';

    }
}