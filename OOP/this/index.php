<?php

class Animal {

    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }

    function latir(){
        return "Au Au <br>";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }

}

$salem = new Animal;

echo "O nome do animal é: $salem->nome <br>";

$salem->escolherNome("salem");

echo "O nome do animal é: $salem->nome <br>";

echo $salem->latir();

echo $salem->latirForte();