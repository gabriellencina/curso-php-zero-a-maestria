<?php

$array_inteiros = [ 10, 20, 30, 40, 50, 60, 70, 80, 90, 100 ];
                
$i = 0;

while($i < count($array_inteiros))
{
    $numero_atual = $array_inteiros[$i];
    
    if($numero_atual == 30 || $numero_atual == 40)
    {
        $i++;
        continue;
    }

    echo "Elementos: $numero_atual <br>";
    
    $i++;
}
