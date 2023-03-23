<?php

class Humano {

}

class Animal {

}

class Professor extends Humano {

}


$gabriel  = new Humano;
$cachorro = new Animal;

if($gabriel instanceof Humano){
    echo "gabriel é um humano <br>";
} else {
    echo "gabriel não é um humano <br>";
}

if($cachorro instanceof Animal){
    echo "cachorro é um animal <br>";
} else {
    echo "cachorro não é um animal <br>";
}

$lencina = new Professor;

if($lencina instanceof Professor){
    echo "gabriel é um humano <br>";
} else {
    echo "gabriel não é um humano <br>";
}

if($lencina instanceof Humano){
    echo "gabriel é um humano <br>";
} else {
    echo "gabriel não é um humano <br>";
}