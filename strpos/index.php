<?php

$str = "estamos testando o novo método strpos, com strpos podemos encontrar string";

$encontra_string = strpos($str, "strpos");

echo $encontra_string;

$encontra_string2 = strpos($str, "java");

echo "$encontra_string2 <br>";

if($encontra_string2 == false){

    echo "Palavra não encontrada";

}