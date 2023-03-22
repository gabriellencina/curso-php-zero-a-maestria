<?php

/*
    Verifica se um item passado por param está no array.
    Se encontra retorna true, caso contrário false.
    Exemplo: in_array("item", $arr)
*/

$arr = ['Gabriel', 'Lencina'];

if(in_array('Gabriel', $arr)){
    echo "Existe a palavra Gabriel no array <br>";
} else {
    echo "Não existe a palavra Gabriel no array <br>";
}

$x = 'Gabriel';

if(in_array($x, $arr)){
    echo "Gabriel existe <br>";
} else {
    echo "Não existe <br>";
}

if(in_array("teste", $arr)){
    echo "Possui teste <br>";
} else {
    echo "Não possui teste <br>";
}