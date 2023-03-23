<?php

class Humano {

    public $nome  = "Gabriel";
    public $idade = 21;

    function falar() {

        echo "Estou realizando a função de falar <br>";
    }
}

class Professor extends Humano {

    public $diploma = "Ti";
    public $salario = 10.000;

    function conteudo(){

      echo "O professor ensina um certo conteudo <br>";
    }

    function estuda(){

        echo "Estudem a matéria passada <br>";
    }
}

$pessoa = new Professor;

echo $pessoa->nome    . "<br>";
echo $pessoa->idade   . "<br>";
echo $pessoa->diploma . "<br>";
echo $pessoa->salario . "<br>";
$pessoa->falar();
$pessoa->conteudo();
$pessoa->estuda();
