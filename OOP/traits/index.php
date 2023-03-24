<?php

/*
    Os traits permitem o reuso de código sem hierarquia de classes, ou seja, sem herança.
    Podemos assim utlizar os métodos da classe que foi feita a trait.
    Utilizamos a palavra reservada "use", exemplo:
        
        class Teste {
            use ClasseTrait
        }
*/

trait Objeto {
    public function teste(){
        echo "Testando trait de objeto <br>";
    }
}

trait Testando {
    public $y = 21;

    public function traitTeste(){
        echo "Este método é da trait testando <br>";
    }
}

class central {
    use Objeto;
    use Testando;
} 

$x = new central;
$x->teste();
$x->traitTeste();

echo $x->y . "<br>";
