<?php

$array = [
    'porta' => 100, // itens mais caros
    'maçaneta' => 5,
    'motor' => 2000, // itens mais caros
    'retrovisor' => 8
];

// função passando como parâmetro minha variável array
function itensCaros($array){

    // declarando uma nova variável recebendo um array vazio
    $arrayItenscaros = [];

    // percorrendo meu "array" passando o valor como preço
    foreach($array as $item => $preco){

        // se meu preço for mais que 10 entra
        if($preco > 10){

            /* 
            pego meus itens do array mais caro
            e passo os valores deles
            para meu novo array chamado arrayItenscaros.

            */
            
            array_push($arrayItenscaros, $item);
        }
    }
    
    return $arrayItenscaros;

}

$novoArray = itensCaros($array);

print_r($novoArray);