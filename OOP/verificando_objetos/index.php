<?php

/*
    Alguns métodos que nos ajudam a entender melhor os objetos

    is_object() => verifica se uma variável é um objeto

    get_class() => verifica a classe de um objeto

    method_exists() => verifica se um método existe em um objeto
*/

class Humano {

    public function falar(){

        echo "Olá";

    }

}

$gabriel = new Humano;

$teste = 10;

if(is_object($gabriel)){

    echo "é um objeto <br>";

} else {

    echo "não é um objeto <br>";

}

if(is_object($teste)){

    echo "é um objeto <br>";

} else {

    echo "não é um objeto <br>";

}

echo get_class($gabriel) . '<br>';

if(method_exists($gabriel, "falar")){

    echo "este método existe <br>";

} else {

    echo "este método não existe <br>";

}

if(method_exists($gabriel, "aaaaa")){

    echo "este método existe <br>";
    
} else {

    echo "este método não existe <br>";
}