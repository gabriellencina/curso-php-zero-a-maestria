<?php

/*
  A função date recebe um param, que é o formato da data.

  A resposta será a data atual.

  Exemplo:
    date("d/m/y");


*/

// Pegamos a data de hoje no formato, dia/mes/ano
$d = date('d/m/y');
echo $d . '<br>';


// para d = dia, M = MAR (mês atual) e Y o ano inteiro atual (2023)
$d2 = date('d, M - Y');
echo $d2 . '<br>';


$d3 = date('d/m/Y');
echo $d3 . '<br>';

$d4 = date('l, F - Y');
echo $d4 . '<br>';
