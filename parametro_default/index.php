<?php

function teste($a = "teste")
{

    echo "O valor de A é: $a <br>";

}

teste();
teste('kk');

// Uma boa prática é inserir os valores default por último
function testando ($b, $a = "x" )
{
    echo "O valor de a é: $a e de b é: $b <br>";
}

testando("1");
testando("1", "2");