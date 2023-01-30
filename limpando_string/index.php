<?php

$string_1 = "     Lencina       ";

echo "Está é a string 1: $string_1. <br>";

/* Usamos a função trim para limpar
espaços-caracteres em brancos da direita e esquerda*/
$limpa_string_1 = trim($string_1);

echo "Está é a string 1: $limpa_string_1. <br>";


/* rtrim (right), corta o caracters-espaços da direita*/
$limpa2_string_1 = rtrim($string_1);

echo "Está é a string 1: $limpa2_string_1. <br>";

/* ltrim (left), corta caractere-espaços a esquerda*/
$limpa3_string_1 = ltrim($string_1);

echo "Está é a string 1: $limpa3_string_1. <br>";
