<?php

$x = 4;

while($x < 30)
{
    echo "O número é $x <br>";

    if($x == 24)
    {
        echo "Chegou no número $x";

        break;
    }

    $x += 2;

}