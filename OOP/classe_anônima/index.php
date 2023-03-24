<?php

/*
    As classes anônimas são criadas em uma variável não possuem nome.
    Elas funcionam como qualquer outra classe.
    Precisamos fechar ela com ";"
    Exemplo:
        $anonima = new classe(){};
*/

$pessoa = new class() {

    public $nome = "Gabriel";

    public function dizerNome() {   

        echo "Olá meu nome é $this->nome <br>";

    }

};

echo $pessoa->nome . '<br>';

$pessoa->dizerNome();