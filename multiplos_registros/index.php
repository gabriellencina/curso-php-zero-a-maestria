<?php

function alteraDados($nome, $idade)
{
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];

}

$dados = alteraDados("Gabriel", 21);

// Mostrando o valor e a posição do array
print_r($dados);

echo "<br>";

// Acessando seus valores passando o índice dele
echo "Olá $dados[0], você tem $dados[1]";