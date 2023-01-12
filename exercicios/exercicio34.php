<?php

function verificaNumero($numero)
{
    if($numero %2 == 0)
    {
        echo "O $numero é par <br>";
    } else {
        echo "O $numero é impar <br>";
    }
}

verificaNumero(10);
verificaNumero(5);
verificaNumero(2);