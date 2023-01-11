<?php

// A cada 1 volta no loop externo, o loop interno roda 5x.
$i = 1;

while($i < 10)
{
    echo "Loop externo $i <br>";

    // segundo contador
    $j = 1;

    while($j <= 5)
    {
        echo "Loop interno $j <br>";

        $j++;
    }

    $i++;
}