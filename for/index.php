<?php

// CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO;

for($i = 0; $i < 10; $i++)
{
    if($i == 5)
    {
        $nome = "Gabriel Lencina";
        echo "Meu nome é: $nome <br>";
    }

    if($i == 9)
    {
        echo "Testando o break $i <br>";

        break;
    }

    echo "Testando o for, numéro: $i <br>";

}