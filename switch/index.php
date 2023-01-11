<?php

// Estrutura de condição, aonde pode substituir o if em alguns casos

// Usamos o break para parar a execução

// Existe opção default caso nenhuma operação seja feita

$x = 0;

switch($x){

    case 0:
        echo "x é igual a 0 <br>";
        break;
    
    case 1:
        echo "x é igual a 1 <br>";
        break;

    case 2:
        echo "x é igual a 2 <br>";
        break;
        
    default:
        echo "x é por padrão 1";
        break;
}