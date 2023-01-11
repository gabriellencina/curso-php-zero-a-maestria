<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11 ,12 ,13, 14, 15, 16, 17, 18, 19, 20];

$i = 0;

while($i < count($numeros))
{
    $numero_atual = $numeros[$i];

    if($numero_atual % 2 == 0)
    {
        echo "$numero_atual são pares <br>";
    }
    
    $i++;
}

// Com For($i = 0; $i < count($arr); $i++)