<?php

/*
    A herança é o recurso da POO que dá a possibilidade de uma classe herdar métodos e propriedades de outra.
    A palavra reservada para isso é extends.
    exemplo:
        class Programador extends Pessoa{

        }
*/

class Humano {

    public $idade = 21;

    public function falar(){

        echo "Olá mundo! <br>";

    }

    private function gritar(){

        echo "PHP É MUITO BOMMMM <br>";

    }

    public function acessaGritar(){

        $this->gritar();

    }

    protected function falarBaixinho(){

        echo "lalalalalala <br>";    
    
    }

    public function acessarfalarBaixinho(){

        $this->falarBaixinho();    
    
    }

}

class Programador extends Humano {

    public function acessarfalarBaixinhoProgramador(){

        $this->falarBaixinho();    
    }

}



$gabriel = new Humano;

$gabriel->falar();
$gabriel->acessaGritar();
$gabriel->acessarfalarBaixinho();

$lencina = new Programador;

echo $lencina->idade . "<br>";

$lencina->falar();
$lencina->acessaGritar();
$lencina->acessarfalarBaixinho();