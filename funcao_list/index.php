<?php

 $pessoa = ["Gabriel", 21 , "Programador", "Vermelho"];

print_r($pessoa);
echo '<br>';

list($nome, $idade, $profissao, $cor) = $pessoa;

// Estamos descontruindo o array e acessando os valores dele por uma variável.
echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$cor <br>";
