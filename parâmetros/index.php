<?php

function velocidadeMaxima($vel)
{
    if(is_int($vel))
    {
        echo "O carro tem velocidade máxima de $vel km/h <br>";
    } else {
        echo "Por favor, passe um número inteiro <br>";
    }
}

velocidadeMaxima(200);
velocidadeMaxima(80);
velocidadeMaxima(20);

// Não executa a função quando não passamos o parãmetro
//velocidadeMaxima();

echo "Teste continuando <br>"; 
$velocidade = 125;

velocidadeMaxima($velocidade);

// php ignora o parâmetro desnecessário
velocidadeMaxima(250, "teste");

velocidadeMaxima("teste");

// mais parâmetros
function descreverAnimal($nome, $raca)
{
    echo "O $nome é da raça $raca <br>";
}

descreverAnimal("Bob", "Viralata");
descreverAnimal("shark", "Pastor alemão");

// sempre passar os argumentos solicitados
//descreverAnimal("Pastor alemão");
