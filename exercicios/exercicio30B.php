<?php
    

$arr = [];

    for($i = 1; $i <= 10; $i++)
    {
        // usamos o método array push para inserirmos valor de $i no nosso array, ex: $i = 1,2,3,4,5,6,7,8,9,10 => valores de cada posição do array 
        array_push($arr, $i);

    }

    print_r($arr);