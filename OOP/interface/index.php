<?php

/*
    Interfaces criam um modelo de definição para a classe.
    Toda classe que implementar uma interface, deverá implementar também suas propriedades
    e métodos OBRIGATORIAMENTE.

    A palavra reservada é implements, exemplo:

        class Humano implements Caracteristicas {

        }
*/



interface Caracteristicas {

    const nome = "gabriel";

    public function falar();

}

class Humano implements Caracteristicas {

    public $idade = 21;
    
    public function falar() {

        echo "Olá mundo! <br>";

    }

    public function dizerNome() {

        echo "Meu nome é " . self::nome . "<br>";

    }

}

$gabriel = new Humano;

$gabriel->falar();
$gabriel->dizerNome();