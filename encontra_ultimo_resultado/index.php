<?php

$str = "Testando o encontro da palavra teste, é isso ai teste <br>";

$palavra = strrpos($str, "teste");

echo "$palavra <br>";

if(strrpos($str, "Java")== false){
    echo "A palavra java não foi encontrada";
}

$p = substr($str, strpos($str, "teste"), 5);

echo "$p <br>";
