<?php

/*
    Pelos construtores podemos inicializar objetos com os valores de propriedades únicos para cada objeto.
    Passamos como argumentos os valores das propriedades.
    Exemplo:
    
    function_construct($portas, $motor, $teto_solar){

    }
*/

class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {
        
        $this->portas = $portas;
        $this->cor    = $cor;
        $this->marca  = $marca; 

    }

}

$audi = new Car(4, "preto", "Audi");

echo "O carro é da $audi->marca , possui $audi->portas e tem a cor $audi->cor <br>";

$onix = new Car(4, "branco", "Chevrolet");

echo "O carro é da $onix->marca , possui $onix->portas e tem a cor $onix->cor <br>";