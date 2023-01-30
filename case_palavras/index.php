<?php

$frase = "testando o case de uma palavra <br>";
$frase2 = "Testando o case de uma palavra <br>";
$frase3 = "Testando o case de uma palavra <br>";

// Primeira letra em maiuśculo
echo ucfirst($frase);
echo ucfirst($frase2);

// Todas as palavras com as inicias maiúscula
echo ucwords($frase3);
echo ucwords($frase2);

