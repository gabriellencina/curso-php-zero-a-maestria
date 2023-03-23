<?php

class Pessoa {

    public $nome  = "gabriel";
    public $idade = 21;

    function andar($m){

        echo "andou  $m metros <br>";

    }
}

$pessoa = new Pessoa;

$pessoa->nome;
$pessoa->idade;

echo "$pessoa->nome <br>";
echo "$pessoa->idade <br>";

$pessoa->andar(100);

echo "O nome dele é $pessoa->nome e tem $pessoa->idade anos <br>";