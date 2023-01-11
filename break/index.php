<?php

$x = 0;

while($x < 10)
{
    echo "O x vale $x <br>";

    if($x == 5)
    {
        echo "Parando o loop em $x";

        break;
    }

    $x++;
}