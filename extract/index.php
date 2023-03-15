<?php

/*
    A função extract consegue pegar a chave e o valor de um array, passando em uma variável.
*/

$arr = [
    'nome' => 'gabriel',
    'idade' => 21
];

extract($arr);

echo "$nome <br>";
echo "$idade <br>";


$nome = 'lencina <br>';

$pessoa = [
    'nome' => 'joazinho',
    'idade' => 21
];

echo "$nome";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";