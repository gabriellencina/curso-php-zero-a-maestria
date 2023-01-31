<?php

// usamos para regastar parte de uma string

$str = "está é minha string";

// pego o inicio pelo índice que quero e conto quantos caracteres vou buscar

$minha = substr($str, 10, 5); // STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA

echo "$str <br>";
echo "$minha <br>";

$str2 = "testando essa string abc";

$novaString = substr($str2, 8); // OMITIR O COMPRIMENTO = PEGAR ATÉ O FIM

echo "$novaString <br>";

$novaString2 = substr($str2, 8, -3); // COMPRIMENTO NEGATIVO = REMOVER DO ULTIMO INDICE

echo $novaString2;