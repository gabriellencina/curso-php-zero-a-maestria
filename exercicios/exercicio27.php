<?php

$valores =  [   
                "primeiro",
                "segundo",
                "terceiro",
                "quarto",
                "quinto",
            ];

$x = count($valores);
$y = 0;

while($y < $x){
     
    if(is_string($valores[$y]))
    {
        echo "$valores[$y] <br>";
    }

    $y++;
}
