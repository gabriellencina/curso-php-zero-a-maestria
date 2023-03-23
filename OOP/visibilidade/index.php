<?php

/*
    Existem 3 formatos para visibilidade, sendo elas: PUBLIC, PROTECTED E PRIVATE.

    PUBLIC => A propriedade ou método pode ser acessada de qualquer forma

    PROTECTED => A propriedade ou método pode ser acessada apenas pela classe origem,
                 ou as que recebem a mesma herança

    PRIVATE => A propriedade ou método pode ser acessada apenas pela classe que foi criada.
*/

class Car {

    public $rodas     = 4;
    private $vidro    = "Sem película";
    protected $portas = 4;

    public function peliculaDeFabrica($pelicula) {
        
        $this->vidro = $pelicula;
    }

    public function getVidro(){ 
        
        return $this->vidro;

    }

    public function getPortas(){

        return $this->portas;

    }

}

class Mecanico {
    public function alteraRodas($carro){

        $carro->rodas = 10;

    }

    public function colocarPelicula($carro, $pelicula){

        $carro->vidro = $pelicula;

    }
}

$carro = new Car;

echo $carro->rodas . "<br>";

$gabriel = new Mecanico;

$gabriel->alteraRodas($carro);

echo $carro->rodas . "<br>";

// Não pode alterar pq é privado
// $gabriel->colocarPelicula($carro, "G20");

$carro->peliculaDeFabrica("G10");

// echo $carro->vidro . "<br>";

echo $carro->getVidro() . "<br>";

// $carro->vidro = "teste";

// echo $carro->portas . "<br>";

echo $carro->getPortas() . "<br>";